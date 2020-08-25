<?php snippet ('header') ?>

<div class="name">
    <h1> <a href="<?= $pages->find('about')->url() ?>" style="text-decoration: underline;"> Dott.ssa Valentina Moscatiello </a> </br> <span id="italic"> Psicologa e Psicoterapeuta in formazione </span></h1>
  </div>

<div class="over">
  <table class="grid">

  <tr>
    <th> <button> Titolo </button> </th>
    <th> <button> Tipologia </button></th>
    <th> <button> Anno </button></th>
  </tr>

  <?php foreach (page('articles')->children() as $article): ?>

  <tr class="row-important" >
    <td> <a href="<?= $article->ext_url() ?>" target="_blank"> <?= $article->title() ?> </a></td>
    <td style="width: 20%" ><?= $article->tags() ?></td>
    <td><?= $article->published()->toDate('Y')  ?></td>
  </tr>

  <tr id="row-info" >
    <td> <?= $article->text() ?> </br> 
      <a href="<?= $article->ext_url() ?>" target="_blank" class="link"> link<sup id="arrow"> ↗ </sup> </a> </td>
    <td> <?= $article->tags() ?> </td>
    <td></td>
  </tr>

  <?php endforeach ?>

</table>
</div>


<?php snippet ('footer') ?>
