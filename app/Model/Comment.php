<?php


class Comment extends AppModel
{
	public $belongsTo = array('Post');

	public $validate = array(
		'commenter' => 'notEmpty',
		'post_id' => 'notEmpty',
		'body' => 'notEmpty'
	);
}
