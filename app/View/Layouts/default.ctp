<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>


<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/
	jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
	<div id="container" class="container">
		<div id="header">
		</div>
		<nav class="navbar navbar-default">
			<!-- ヘッダのボタン -->
			<div class="navbar-header">
				<button type="butten" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				</button>
				<!-- ロゴ -->
				<?php echo $this->Html->link('Oneday blog','/',array('class'=>'navbar-brand'));?>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><?php echo $this->Html->link('このページについて',array('controller'=>'pages','action'=>'about'));?></li>
					<li><?php echo $this->Html->link('記事一覧',array('controller'=>'posts','action'=>'index'));?></li>
					<li><?php echo $this->Html->link('カテゴリ一覧',array('controller'=>'categories','action'=>'index'));?></li>
					<li><?php echo $this->Html->link('ユーザー一覧',array('controller'=>'users','action'=>'index'));?></li>
				</ul>
			</div>
		</nav>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

		</div>
		<div id="footer">
			<?php //echo $this->Html->link(
					//$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					//'http://www.cakephp.org/',
					//array('target' => '_blank', 'escape' => false)
				//);
			?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
