<?php
/* Videos Test cases generated on: 2011-10-04 16:31:36 : 1317738696*/
App::import('Controller', 'Videos');

class TestVideosController extends VideosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VideosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.video', 'app.note', 'app.user');

	function startTest() {
		$this->Videos =& new TestVideosController();
		$this->Videos->constructClasses();
	}

	function endTest() {
		unset($this->Videos);
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
