<?php
App::uses('AppController', 'Controller');
/**
 * Seminars Controller
 *
 */
class TopsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index($userData = null) {
		//認証情報を取得
		$user_data=$this->Auth->user();
		if(is_null($user_data)){
			$user_data['username']='guest';
		}
		$this->set("user_data",$user_data);
	}

}
