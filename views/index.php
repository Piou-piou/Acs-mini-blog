<div class="row">
	<div class="col-xs-12 col-sm-9">
		<p class="pull-right visible-xs">
			<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
		</p>
		<div class="jumbotron">
			<h1>Hello, world!</h1>
			<p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
		</div>
	</div><!--/.col-xs-12.col-sm-9-->
	
	<?php foreach ($res as $obj):?>
		<div class="col-xs-12">
			<h2><?=$obj->titre?></h2>
			<p><?=$obj->contenu?></p>
			<p><a class="btn btn-default" href="index.php?page=article&id_article=<?=$obj->ID_article?>" role="button">View details &raquo;</a></p>
		</div>
	<?php endforeach;?>
</div>