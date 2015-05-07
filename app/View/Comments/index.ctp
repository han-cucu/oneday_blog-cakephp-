<h2><?php echo $post['Post']['title'];?> : コメント一覧</h2>

<table class="table table-striped table-bordered table-hover">
   <tr>
        <th>コメント</th>
        <th>投稿ユーザ</th>
       <th>作成日</th>
   </tr>
<?php foreach ($comments as $comment): ?>
   <tr>
        <td><?php echo $comment['Comment']['body']; ?></td> 
        <td><?php echo $comment['User']['id']; ?></td>
        <td><?php echo $comment['Comment']['created']; ?></td>
       
   </tr>
<?php endforeach; ?>
</table>
<?php 
echo $this->Html->link('コメントを投稿する',array(
            'controller' => 'Comments',
            'action' => 'add',$post['Post']['id']),array('class'=>'btn btn-primary')); 
?>
