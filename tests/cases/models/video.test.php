<?php
/* Video Test cases generated on: 2011-10-04 15:26:04 : 1317734764*/
App::import('Model', 'Video');

class VideoTestCase extends CakeTestCase {
	var $fixtures = array('app.video', 'app.note', 'app.user');

	function startTest() {
		$this->Video =& ClassRegistry::init('Video');
	}

	function endTest() {
		unset($this->Video);
		ClassRegistry::flush();
	}

}
