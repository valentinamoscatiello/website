<?php snippet ('header') ?>

<a href="<?= $pages->find('home')->url() ?>">
<div id="home"> 
</div>
</a>

	<div class="name">
		<h1> <a href="<?= $pages->find('home')->url() ?>" style="text-decoration: underline;"> Dott.ssa Valentina Moscatiello </a> </br> <span id="italic"> Psicologa e Psicoterapeuta in formazione </span></h1>
	</div>

	<div class="about">

		<div class="new">
		<p class="about-text"> <?= $page->text() ?> </p>
		</div>

		<div class="im">
			<img src= "<?= $page->files() ?>" style="width: 80%; padding-left: 10%;"> 
		</div>

	</div>



<?php snippet ('footer') ?>
