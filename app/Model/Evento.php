<?php
App::uses('AppModel', 'Model');
/**
 * Evento Model
 *
 * @property Users $Users
 */
class Evento extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Users' => array(
			'className' => 'Users',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}