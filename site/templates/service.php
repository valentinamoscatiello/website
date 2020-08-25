<?php snippet ('header') ?>

<a href="<?= $pages->find('home')->url() ?>">
<div id="home"> 
</div>
</a>

<div class="name">
		<h1> <a href="<?= $pages->find('about')->url() ?>" style="text-decoration: underline;"> Dott.ssa Valentina Moscatiello </a> </br> <span id="italic"> Psicologa e Psicoterapeuta in formazione </span></h1>
	</div>


	<div class="service">
		<div class="one">
		<p class="service-text"> <?= $page->text() ?> </p>
		</div>
		<div class="two">
		<p class="address"> <?= $page->address() ?> </p>
		<p class="address" style="margin-top: 10%;"> <?= $page->image('mail.svg') ?> <a href="mailto:moscatiellovalentina@gmail.com"> <?= $page->email() ?> </a>  </p>
		<p class="address" style="margin-top: 5%;">  <?= $page->image('phone.svg') ?> <?= $page->phone() ?></p>
		</div>
	</div>


<?php snippet ('footer') ?>
