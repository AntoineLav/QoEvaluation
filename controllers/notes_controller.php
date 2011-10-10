<?php

/*
- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

Title : NotesController
Author : Antoine Lavignotte
URL :	

Description :	

Created :	10/10/2011
Modified :	10/10/2011

- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*/

class NotesController extends AppController {

	var $name = 'Notes';
	
	/*
	 * Function 'saveNote'
	 * Save the grade 
	 * @params : sent by POST method
	 * @param note: note defined by the user
	 * @param user_id : Id of the user
	 * @param video_id : Id of the video
	 * @return: true or false
	 */
	
	function saveNote() {
	
		$this->layout = 'layout';
		$this->autoRender = false;
		
		$data = array('Note' => array(		//Formatting the data before sending in the database
									'note' => $_POST['note'],
									'user_id' => $_POST['user_id'],
									'video_id' => $_POST['video_id']
								));
		
		$this->Note->save($data); //Save the data
	}
	
	/*
	 * Function 'saveAverage'
	 * Save the average grade
	 * @params : sent by POST method (result of the form)
	 * @param note: note defined by the user
	 * @param user_id : Id of the user
	 * @param video_id : Id of the video
	 * @return: true or false
	 */
	
	function saveAverage() {
	
		if($this->Note->save($this->data)){
			$this->redirect(array('controller' => 'users', 'action' => 'accueil'));
		} else {
			$this->redirect(array('controller' => 'users', 'action' => 'bye'));
		}
	}
	
	/***************************************************************************************************/

	function admin_index() {
		$this->Note->recursive = 0;
		$this->set('notes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid note', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('note', $this->Note->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Note->create();
			if ($this->Note->save($this->data)) {
				$this->Session->setFlash(__('The note has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The note could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Note->User->find('list');
		$videos = $this->Note->Video->find('list');
		$this->set(compact('users', 'videos'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid note', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Note->save($this->data)) {
				$this->Session->setFlash(__('The note has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The note could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Note->read(null, $id);
		}
		$users = $this->Note->User->find('list');
		$videos = $this->Note->Video->find('list');
		$this->set(compact('users', 'videos'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for note', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Note->delete($id)) {
			$this->Session->setFlash(__('Note deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Note was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
