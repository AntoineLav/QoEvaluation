<?php
class User extends AppModel {
	var $name = 'User';
	var $validate = array(
		'nom' => array(
			'minlength' => array(
				'rule' => array('minLength', 3),
				'message' => 'Le nom doit contenir au moins 3 lettres',
				'allowEmpty' => false,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'prenom' => array(
			'minlength' => array(
				'rule' => array('minLength', 3),
				'message' => 'Le prénom doit contenir au moins 3 lettres',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'age' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'L\'utilisateur doit indiquer son âge',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sexe' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Indiquer le sexe de l\'utilisateur',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Note' => array(
			'className' => 'Note',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
