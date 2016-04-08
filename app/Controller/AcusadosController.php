<?php
App::uses('AppController', 'Controller');
/**
 * Acusados Controller
 *
 * @property Acusado $Acusado
 * @property PaginatorComponent $Paginator
 */
class AcusadosController extends AppController {

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
		$this->Acusado->recursive = 0;
		$this->set('acusados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Acusado->exists($id)) {
			throw new NotFoundException(__('Invalid acusado'));
		}
		$options = array('conditions' => array('Acusado.' . $this->Acusado->primaryKey => $id));
		$this->set('acusado', $this->Acusado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Acusado->create();
			if ($this->Acusado->save($this->request->data)) {
				$this->Session->setFlash(__('The acusado has been saved.'));
				return $this->redirect(array('controller'=>'procesos','action'=>'add'));
			} else {
				$this->Session->setFlash(__('The acusado could not be saved. Please, try again.'));
			}
		}
		$users = $this->Acusado->User->find('list');
		$ciudads = $this->Acusado->Ciudad->find('list');
		$audiencias = $this->Acusado->Audiencia->find('list');
		$this->set(compact('users', 'ciudads', 'audiencias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Acusado->exists($id)) {
			throw new NotFoundException(__('Invalid acusado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Acusado->save($this->request->data)) {
				$this->Session->setFlash(__('The acusado has been saved.', 'default', array('class' => 'alert alert-success')));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Acusado.' . $this->Acusado->primaryKey => $id));
			$this->request->data = $this->Acusado->find('first', $options);
		}
		$users = $this->Acusado->User->find('list');
		$ciudads = $this->Acusado->Ciudad->find('list');
		$audiencias = $this->Acusado->Audiencia->find('list');
		$this->set(compact('users', 'ciudads', 'audiencias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Acusado->id = $id;
		if (!$this->Acusado->exists()) {
			throw new NotFoundException(__('Invalid acusado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Acusado->delete()) {
			$this->Session->setFlash(__('The acusado has been deleted.'));
		} else {
			$this->Session->setFlash(__('The acusado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
