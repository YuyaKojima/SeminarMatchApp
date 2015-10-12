<?php
App::uses('AppController', 'Controller');
/**
 * Goods Controller
 *
 * @property Good $Good
 * @property PaginatorComponent $Paginator
 */
class GoodsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array('Request','Good');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Good->recursive = 0;
		$this->set('goods', $this->Paginator->paginate());
	}

	/**
	 * isAuthorized method
	 *著者とアドミンのみに編集を許可する
	 * @return void
	 */
	public function isAuthorized($user){
	  if ($this->action==='addGood'){
	    return true;
	  }
		if (in_array($this->action,array('edit','delete'))){
			//認証情報を取得
			$user_data=$this->Auth->user();

			if($user_data['role']==='admin'){
				return true;
			}
			$postId=$this->request->params['pass'];
			$postEmail=$this->Good->find('first',array(
				'conditions'=>array('id'=>$postId),
				'fields'=>array('mail')
			));
			return $postEmail['Good']['mail']===$user_data['email'];
		}
	  return parent::isAuthorized($user);
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Good->exists($id)) {
			throw new NotFoundException(__('Invalid good'));
		}
		$options = array('conditions' => array('Good.' . $this->Good->primaryKey => $id));
		$this->set('good', $this->Good->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Good->create();
			if ($this->Good->save($this->request->data)) {
				$this->Session->setFlash(__('The good has been saved.'));
				return $this->redirect(array('controller'=>'Request','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The good could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * add method
	 *
	 * @return void
	 */
		public function addGood($id = null) {
			// if (!$this->PersonInfo->exists($id)) {
			// 	throw new NotFoundException(__('Invalid person info'));
			// }
			$this->set('requestId',$id);
			$user_data=$this->Auth->user();
			$this->set("user_data",$user_data);
			if ($this->request->is('post')) {
			$this->Good->create();
			$goodCount=$this->Good->find('count',array(
				'conditions'=>array('Request_id ='=>$id)
			));
			$data=array(
				'id'=>$id,
				'good_cnt'=>(int)$goodCount+1
			);
			$this->Request->save($data);

				if ($this->Good->save($this->request->data)) {
					$this->Session->setFlash(__('It has been saved.'));
					return $this->redirect('/requests/view/'.$id);
				} else {
					$this->Session->setFlash(__('It could not be saved. Please, try again.'));
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
		if (!$this->Good->exists($id)) {
			throw new NotFoundException(__('Invalid good'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Good->save($this->request->data)) {
				$requestId=$this->Good->find('first',array(
					'conditions'=>array('id'=>$id),
					'fields'=>array('Request_id')
				));
				$this->Session->setFlash(__('The good has been saved.'));
				return $this->redirect('/requests/view/'.$requestId['Good']['Request_id']);
			} else {
				$this->Session->setFlash(__('The good could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Good.' . $this->Good->primaryKey => $id));
			$this->request->data = $this->Good->find('first', $options);
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
		$this->Good->id = $id;
			if (!$this->Good->exists()) {
			throw new NotFoundException(__('Invalid good'));
		}
		$this->request->allowMethod('post', 'delete');
		$requestId=$this->Good->find('first',array(
			'conditions'=>array('id'=>$id),
			'fields'=>array('Request_id')
		));

		if ($this->Good->delete()) {
			$this->Session->setFlash(__('The good has been deleted.'));
		} else {
			$this->Session->setFlash(__('The good could not be deleted. Please, try again.'));
		}
		return $this->redirect('/requests/view/'.$requestId['Good']['Request_id']);

	}
}
