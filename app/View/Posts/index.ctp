<h2>記事一覧</h2>
<table class="table table-striped table-bordered table-hover">
   <tr>
       <th>ID</th>
       <th>タイトル</th>
       <th>カテゴリ</th>
        <th>投稿ユーザ</th>
       <th>作成日</th>
   </tr>
<?php foreach ($posts as $post): ?>
   <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td><?php echo $this->Html->link($post['Post']['title'],array('action'=>'detail',$post['Post']['id'])); ?></td>
        <td><?php echo $post['Category']['name']; ?></td>
        <td><?php echo $post['User']['name']; ?></td> 
        <td><?php echo $post['Post']['created']; ?></td>
       
   </tr>
<?php endforeach; ?>
</table>
<?php 
echo $this->Html->link('記事を投稿する',array('action'=>'add'),array('class'=>'btn btn-primary')); 
?>
