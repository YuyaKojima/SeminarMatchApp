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
				return $this->redirect(array('action' => 'index'));
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
					return $this->redirect('/Requests/view/'.$id);
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
				$this->Session->setFlash(__('The good has been saved.'));
				return $this->redirect(array('action' => 'index'));
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
		if ($this->Good->delete()) {
			$this->Session->setFlash(__('The good has been deleted.'));
		} else {
			$this->Session->setFlash(__('The good could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
