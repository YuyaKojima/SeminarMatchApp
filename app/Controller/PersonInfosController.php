<?php
App::uses('AppController', 'Controller');
/**
 * PersonInfos Controller
 *
 * @property PersonInfo $PersonInfo
 * @property PaginatorComponent $Paginator
 */
class PersonInfosController extends AppController {

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
		$this->PersonInfo->recursive = 0;
		$this->set('personInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PersonInfo->exists($id)) {
			throw new NotFoundException(__('Invalid person info'));
		}
		$options = array('conditions' => array('PersonInfo.' . $this->PersonInfo->primaryKey => $id));
		$this->set('personInfo', $this->PersonInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if (!$this->PersonInfo->exists($id)) {
			throw new NotFoundException(__('Invalid person info'));
		}
		if ($this->request->is('post')) {
			$this->PersonInfo->create();
			if ($this->PersonInfo->save($this->request->data)) {
				$this->Session->setFlash(__('It has been saved.'));
				return $this->redirect(array('action' => 'index'));
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
		if (!$this->PersonInfo->exists($id)) {
			throw new NotFoundException(__('Invalid person info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PersonInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The person info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PersonInfo.' . $this->PersonInfo->primaryKey => $id));
			$this->request->data = $this->PersonInfo->find('first', $options);
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
		$this->PersonInfo->id = $id;
		if (!$this->PersonInfo->exists()) {
			throw new NotFoundException(__('Invalid person info'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PersonInfo->delete()) {
			$this->Session->setFlash(__('The person info has been deleted.'));
		} else {
			$this->Session->setFlash(__('The person info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
