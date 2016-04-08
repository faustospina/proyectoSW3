<?php
App::uses('AppController', 'Controller');
/**
 * Juezs Controller
 *
 * @property Juez $Juez
 * @property PaginatorComponent $Paginator
 */
class JuezsController extends AppController {

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
		$this->Juez->recursive = 0;
		$this->set('juezs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Juez->exists($id)) {
			throw new NotFoundException(__('Invalid juez'));
		}
		$options = array('conditions' => array('Juez.' . $this->Juez->primaryKey => $id));
		$this->set('juez', $this->Juez->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Juez->create();
			if ($this->Juez->save($this->request->data)) {
				$this->Session->setFlash(__('The juez has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The juez could not be saved. Please, try again.'));
			}
		}
		$audiencias = $this->Juez->Audiencia->find('list');
		$procesos = $this->Juez->Proceso->find('list');
		$this->set(compact('audiencias', 'procesos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Juez->exists($id)) {
			throw new NotFoundException(__('Invalid juez'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Juez->save($this->request->data)) {
				$this->Session->setFlash(__('The juez has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The juez could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Juez.' . $this->Juez->primaryKey => $id));
			$this->request->data = $this->Juez->find('first', $options);
		}
		$audiencias = $this->Juez->Audiencia->find('list');
		$procesos = $this->Juez->Proceso->find('list');
		$this->set(compact('audiencias', 'procesos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Juez->id = $id;
		if (!$this->Juez->exists()) {
			throw new NotFoundException(__('Invalid juez'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Juez->delete()) {
			$this->Session->setFlash(__('The juez has been deleted.'));
		} else {
			$this->Session->setFlash(__('The juez could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
