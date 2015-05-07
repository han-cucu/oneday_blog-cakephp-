<?php

class Category extends AppModel
{
	public $belongsTo = array(
		
	);

	public $validate = array(
		'category_id' => 'notEmpty',
		'name' => 'notEmpty',
	);

	public $hasMany = array('Post');
	public $recursive = 2;
}
	