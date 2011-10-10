<?php
/* Note Test cases generated on: 2011-10-04 15:22:07 : 1317734527*/
App::import('Model', 'Note');

class NoteTestCase extends CakeTestCase {
	var $fixtures = array('app.note', 'app.user', 'app.video');

	function startTest() {
		$this->Note =& ClassRegistry::init('Note');
	}

	function endTest() {
		unset($this->Note);
		ClassRegistry::flush();
	}

}
