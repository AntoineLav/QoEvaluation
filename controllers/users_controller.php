<?php

/*
- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

Title : UsersController
Author : Antoine Lavignotte
URL :	

Description :	

Created :	10/10/2011
Modified :	10/10/2011

- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*/

class UsersController extends AppController {

	var $name = 'Users';
	
	/*
	 * Function 'accueil'
	 * First page
	 */
	
	function accueil() {
	
		$this->layout = 'layout';
		
		setcookie('videoNumber', null);
		setcookie('userId', null);
	}
	
	/*
	 * Function 'begin'
	 * Save the data from accueil form
	 * Call the function watch
	 */
	
	function begin() {
	
		$this->layout = false;
		$this->autoRender = false;
	
		if(!empty($this->data)) {
			$this->User->create();
			if($this->User->save($this->data)) { 	//Save the data in the database from the accueil form
				setcookie('videoNumber', '1');	//Creation of cookie videoNumber
				$idUser = $this->User->field('id', array('User.nom' => $this->data['User']['nom'], 'User.prenom' => $this->data['User']['prenom']));	//Research the user id in the database
				setcookie('userId', $idUser); //Creation of cookie userId
				$this->redirect(array('action' => 'watch')); //Call the function watch of the controller
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
				$this->redirect(array('action' => 'accueil')); //Redirection to the welcome page
			}
		}
	}
	
	/*
	 * Function 'watch'
	 * Play the video
	 */
	 
	function watch(){
	
		$idVideo = $_COOKIE['videoNumber']; //Copy of the videoNumber cookie
		$idVideoINT = intval($idVideo); //Cast of the value -> int
		
		if($idVideo != null){
			$this->layout = 'layout';
			$this->loadModel('video');
			$nomVideo = $this->video->field('nom', array('id' => $idVideoINT)); //Search the video name to display
			if($nomVideo != null) {
				$this->set('nomVideo', $nomVideo); //Call the view witch parameter 'video name'
				$this->Render();
			} else {
				$this->redirect(array('controller' => 'users', 'action' => 'bye'));
			}
			
		} else {
			$this->redirect(array('action' => 'accueil'));
		}
		
	}
	
	/*
	 * Function 'bye'
	 * Display the last page (form for the average grade)
	 */
	 
	function bye(){
	
		$this->layout = 'layout';
	}
	
	/********************************************************************************/
	
	
	function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
