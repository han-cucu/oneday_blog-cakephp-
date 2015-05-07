<h2>カテゴリ一覧</h2>
<table class="table table-striped table-bordered table-hover">
   
<?php foreach ($categories as $category): ?>
   <tr>
        <td><?php echo $this->Html->link($category['Category']['name'],array('action'=>'search',$category['Category']['id'])); ?></td>
   </tr>
<?php endforeach; ?>
</table>
<?php 
echo $this->Html->link('カテゴリを追加する',array('action'=>'add'),array('class'=>'btn btn-primary')); 
?>
