<h2><?php echo $user['User']['name'];?> : 記事一覧</h2>


<table class="table table-striped table-bordered table-hover">
   <tr>
       <th>ID</th>
       <th>タイトル</th>
       <th>カテゴリ</th>
       <th>作成日</th>
   </tr>
<?php foreach ($posts as $post): ?>
   <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td><?php echo $this->Html->link($post['Post']['title'],array('action'=>'../posts/detail',$post['Post']['id'])); ?></td>
        <td><?php echo $post['Category']['name']; ?></td>
        <td><?php echo $post['Post']['created']; ?></td>
       
   </tr>
<?php endforeach; ?>
</table>