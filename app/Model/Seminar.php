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


public function isOwnedBy($post,$user){
  //$sample=$this->field('email',array('email'=>$post,'email'=>$user)) !==false;
  return $this->field('email',array('email'=>$post,'email'=>$user)) !==false;
}


/**
 * hasMany associations
 * Seminar_PersonInfo_count
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
