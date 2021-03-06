<?php
App::uses('AppController', 'Controller');
/**
 * Seminars Controller
 *
 * @property Seminar $Seminar
 * @property PaginatorComponent $Paginator
 */
class SeminarsController extends AppController {


/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Seminar->recursive = 0;
		$this->set('seminars', $this->Paginator->paginate());
	}



	/**
	 * isAuthorized method
	 *著者とアドミンのみに編集を許可する
	 * @return void
	 */
	public function isAuthorized($user){
	  if ($this->action==='add'){
	    return true;
	  }
		if (in_array($this->action,array('edit','delete','hold'))){
			//認証情報を取得
			$user_data=$this->Auth->user();

			if($user_data['role']==='admin'){
				return true;
			}
			$postId=$this->request->params['pass'];
			$postEmail=$this->Seminar->find('first',array(
				'conditions'=>array('id'=>$postId),
				'fields'=>array('email')
			));
			return $postEmail['Seminar']['email']===$user_data['email'];
		}
	  return parent::isAuthorized($user);
	}

	public function beforeFilter(){
	  $this->Auth->allow('index','view','add','suggested');
	}





/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Seminar->exists($id)) {
			throw new NotFoundException(__('Invalid seminar'));
		}
		$options = array('conditions' => array('Seminar.' . $this->Seminar->primaryKey => $id));
		$this->set('seminar', $this->Seminar->find('first', $options));
		$data=$this->Seminar->find('first', $options);
	
		}



/**
 * suggested method
 *
 * @return void
 */
	public function suggested() {
		$user_data=$this->Auth->user();
		$this->set("user_data",$user_data);
		$datas=$this->Paginator->paginate();
		foreach ($datas as $data):
				$id = $data["Seminar"]["id"];
				$options = array('conditions' => array('Seminar.' . $this->Seminar->primaryKey => $id));
				$this->set('seminar', $this->Seminar->find('first', $options));
				$updateData=$this->Seminar->find('first', $options);
			  $updatePersonsData= count($updateData['PersonInfo']);
				$newData = array('id' => $id, 'persons' =>$updatePersonsData);
				$this->Seminar->save($newData);
		endforeach;
		$this->set('seminars', $this->Paginator->paginate());
	}

	/**
	 * hold method
	 *
	 * @return void
	 */
		public function hold($id = null) {
			$user_data=$this->Auth->user();
			$this->set("requestId",$id);
			if ($this->request->is(array('post', 'put'))) {
				$data = array('id' => $id, 'holding_flg' =>1);
				if ($this->Seminar->save($data)) {
					$name=$user_data['username'];
					$seminarNum=$id;
					$seminarName="hoge";

					$Email = new CakeEmail("gmail");
					$Email->from(array('seattleconsulting.seminar@gmail.com' => 'Sender'));
					$Email->to('yuya.kojima@seattleconsulting.co.jp');
					$Email->subject('Test');
					$Email->template("teacher_add","default");
					$Email->viewVars( compact( 'name', 'seminarName','seminarNum'));
					$Email->send();

					$this->Session->setFlash(__('It has been saved.'));
					$this->redirect(array('controller'=>'seminars','action' => 'suggested'));
				} else {
					$this->Session->setFlash(__('It could not be saved. Please, try again.'));
				}
			$this->set("user_data",$user_data);
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$user_data=$this->Auth->user();
		$this->set("user_data",$user_data);
		if ($this->request->is('post')) {
			$this->Seminar->create();
			if ($this->Seminar->save($this->request->data)) {
				$this->Session->setFlash(__('The seminar has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seminar could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Seminar->exists($id)) {
			throw new NotFoundException(__('Invalid seminar'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Seminar->save($this->request->data)) {
				$this->Session->setFlash(__('The seminar has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seminar could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Seminar.' . $this->Seminar->primaryKey => $id));
			$this->request->data = $this->Seminar->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Seminar->id = $id;
		if (!$this->Seminar->exists()) {
			throw new NotFoundException(__('Invalid seminar'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Seminar->delete()) {
			$this->Session->setFlash(__('The seminar has been deleted.'));
		} else {
			$this->Session->setFlash(__('The seminar could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'suggested'));
	}
}
