
<h2><?php echo $post['Post']['title'];?></h2>
<br>
<p><?php echo $post['Post']['body'];?> </p>
<hr>

<p>投稿日：<?php echo $post['Post']['created']; ?></p>
<p>カテゴリ：<?php echo $post['Category']['name']; ?></p>
<p>投稿ユーザ：<?php echo $post['User']['name']; ?></p>
<hr>

<p>コメント一覧</p>
<ul>
<?php foreach ($post['Comment'] as $comment): ?>
<li><?php echo h($comment['body']) ?> by <?php echo h($comment['commenter']); ?></li>
<?php endforeach; ?>
</ul>
<?php 
echo $this->Form->create('Comment', array('action'=>'add'));
echo $this->Form->input('commenter', array('rows'=>1));
echo $this->Form->input('body', array('rows'=>1));
echo $this->Form->input('Comment.post_id', array('type'=>'hidden', 'value'=>$post['Post']['id']));
echo $this->Form->submit('コメントを追加する',array('class'=>'btn btn-primary')
);
?>
<hr>
<br>
<?php 
echo $this->Html->link('この記事を編集する',
    array('action'=>'edit', $post['Post']['id']),
    array('class'=>'btn btn-primary')
);
?>
<?php
echo $this->Form->postLink(
    'この記事を削除する',
    array('action'=>'delete', $post['Post']['id']),
    array('class'=>'btn btn-danger'),
    '本当に削除してもよろしいですか？' // 確認メッセージ
);
?>

