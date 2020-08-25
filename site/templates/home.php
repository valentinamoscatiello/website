<?php snippet ('header') ?>




<div class="name">
		<h1> <a href="<?= $pages->find('about')->url() ?>" style="text-decoration: underline;"> Dott.ssa Valentina Moscatiello </a> </br> <span id="italic"> Psicologa e Psicoterapeuta in formazione </span></h1>
	</div>

<div style="width: 70%; margin: 0 auto; margin-top: 5%;">

	<a href="<?= $pages->find('articles')->url() ?>" > 
<div class="home-art">
<h1 class="type"> Articoli, Progetti e </br> Pubblicazioni.  </h1>
 </div>
 </a>

<a href="<?= $pages->find('services')->url() ?>" >
<div class="servic">
 <h1 class="type">  Prevenzione, Diagnosi e</br> Sostegno Psicologico. </h1>
</div>
</a> 

</div>

<?php snippet ('footer') ?>
