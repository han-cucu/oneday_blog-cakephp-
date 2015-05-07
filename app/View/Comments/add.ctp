<h2>コメント投稿</h2>

<?php echo $this->Form->create('Comment',array('class'=>'form')); ?>
<?php echo $this->Form->hidden('Comment.post_id',array('value'=>$post['Post']['id']));?>
<?php echo $this->Form->input('Comment.user_id',array('type'=>'select','options'=>$users,'class'=>'form-control')); ?>
<?php echo $this->Form->input('Comment.body',array('class'=>'form-control')); ?>
<?php echo $this->Form->submit('投稿',array('class'=>'btn btn-primary')); ?>