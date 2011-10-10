<?php
/* Notes Test cases generated on: 2011-10-04 16:31:19 : 1317738679*/
App::import('Controller', 'Notes');

class TestNotesController extends NotesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NotesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.note', 'app.user', 'app.video');

	function startTest() {
		$this->Notes =& new TestNotesController();
		$this->Notes->constructClasses();
	}

	function endTest() {
		unset($this->Notes);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
