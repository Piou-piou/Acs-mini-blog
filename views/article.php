<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php foreach ($res as $obj):?>
				<h2><?=$obj->titre?></h2>
				
				<ul>
					<?php foreach ($res1 as $obj1):?>
						<li><?=$obj1->nom_categorie?></li>
					<?php endforeach;?>
				</ul>
				
				<?=$obj->contenu?>
			<?php endforeach;?>
		</div>
	</div>
</div>