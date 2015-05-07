<?php

// Postモデル
class Comment extends AppModel
{
	public $belongsTo = array(
		'User',
		'Post'
	);

	public $validate = array(
		'user_id' =>  'notEmpty',
		'post_id' => 'notEmpty',
		'body' => 'notEmpty'
	);
}
