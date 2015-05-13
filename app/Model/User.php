<?php

class User extends AppModel
{

	public $validate = array(
		'user_id' =>  'notEmpty',
		'name' => 'notEmpty'
	);
	
	public $hasMany = array('Post');
	public $recursive = 2;
}