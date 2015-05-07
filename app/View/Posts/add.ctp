<h2>記事投稿</h2>

<?php echo $this->Form->create('Post',array('class'=>'form')); ?>
<?php echo $this->Form->input('Post.title',array('class'=>'form-control')); ?>
<?php echo $this->Form->input('Post.category_id',array('type'=>'select','options'=>$categories,'class'=>'form-control')); ?>
<?php echo $this->Form->input('Post.user_id',array('type'=>'select','options'=>$users,'class'=>'form-control')); ?>
<?php echo $this->Form->input('Post.body',array('class'=>'form-control')); ?>
<?php echo $this->Form->submit('投稿',array('class'=>'btn btn-primary')); ?>