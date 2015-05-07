<h2>記事: <?php echo $post['Post']['title']?> 編集</h2>

<!--<?php echo $this->Form->create('post'); ?>
<?php echo $this->Form->input('Post.value'); ?>
<?php echo $this->Form->input('Post.id'); ?>
<<?php echo $this->Form->submit('編集する'); ?>

<?php echo $this->Form->create('Post'); ?>
<?php echo $this->Form->input('Post.title'); ?>
<?php echo $this->Form->input('Post.category_id',array('type'=>'select','options'=>$categories)); ?>
<?php echo $this->Form->input('Post.user_id',array('type'=>'select','options'=>$users)); ?>
<?php echo $this->Form->input('Post.body'); ?>
<?php echo $this->Form->submit('投稿'); ?>-->

<?php echo $this->Form->create('Post',array('class'=>'form')); // $this->request->data['Post'][]の形でデータを送るフォーム ?>
 <?php echo $this->Form->hidden('Post.id',array('value'=>$post['Post']['id']));?>
 <?php echo $this->Form->input('Post.title',array('class'=>'form-control','default'=>$post['Post']['title']));?>
 <?php echo $this->Form->input('Post.category_id',array('type'=>'select','options'=>$categories,'class'=>'form-control','default'=>$post['Post']['category_id']));?>
<?php echo $this->Form->input('Post.user_id',array('type'=>'select','options'=>$users,'class'=>'form-control','default'=>$post['Post']['user_id']));?>
<?php echo $this->Form->input('Post.body',array('class'=>'form-control','default'=>$post['Post']['body']));?>
<?php echo $this->Form->submit('投稿',array('class'=>'btn btn-primary')); ?>