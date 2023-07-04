<?php  require "partials/head.php"?>
<h1> home page : our authors</h1>
<?php  if(!empty($home) ) { ?> 

  <?php foreach($home as $author): ?>
    <h2><?= $author['name'] ?></h2>
    <h2><?= $author['books']  ?></h2>

<?php endforeach ?>

<?php } ?>

<?php  require "partials/footer.php"?>
