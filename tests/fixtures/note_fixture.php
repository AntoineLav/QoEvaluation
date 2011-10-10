<?php
/* Note Fixture generated on: 2011-10-04 15:21:59 : 1317734519 */
class NoteFixture extends CakeTestFixture {
	var $name = 'Note';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'note' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'video_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_notes_users' => array('column' => 'user_id', 'unique' => 0), 'fk_notes_videos1' => array('column' => 'video_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'note' => 1,
			'user_id' => 1,
			'video_id' => 1,
			'created' => '2011-10-04 15:21:59',
			'modified' => '2011-10-04 15:21:59'
		),
	);
}
