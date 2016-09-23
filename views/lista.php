<?php $title = "FlatBlogPHP" ?>
<?php ob_start() ?>
	<h1>Entradas</h1>
		<ul>
			<?php foreach($post as $post):?>
			<li>
				<a href="detalle.php?id=<?=$post['id']?>">

					<?= $post['titulo']?>
		
				</a>
				
			</li>
			<?php endforeach?>
		</ul>
<?php $content = ob_get_clean() ?>

<?php include 'views/template.php'?>