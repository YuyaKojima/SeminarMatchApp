<?php
App::uses('AppModel', 'Model');
/**
 * Seminar Model
 *
 * @property PersonInfo $PersonInfo
 */
class Seminar extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Seminars';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'PersonInfo' => array(
			'className' => 'PersonInfo',
			'foreignKey' => 'Seminar_id',
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
