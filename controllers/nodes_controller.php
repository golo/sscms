<?php
class NodesController extends SscmsAppController {

	var $name = 'Nodes';

	function index() {
		$this->Node->recursive = 0;
		$this->set('nodes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'node'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('node', $this->Node->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Node->create();
			if ($this->Node->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'node'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'node'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'node'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Node->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'node'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'node'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Node->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'node'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Node->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Node'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Node'));
		$this->redirect(array('action' => 'index'));
	}
}
