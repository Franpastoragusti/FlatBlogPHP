<?php $title = $post['titulo'] ?>
<?php ob_start() ?>
	<h1><?=$post['titulo'] ?></h1>
		<div>
		<?= $post['descripcion']?>
		</div>
<?php $content = ob_get_clean() ?>
<?php?>

<?php include 'views/template.php'?>
