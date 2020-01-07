<!DOCTYPE html>
<html>
<?php require "head.html.php" ?>
    <body>
    <div class="container mt-3 pb-5 overflow-auto">
    <?php foreach($post as $post): ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?=$post->title; ?></h5>
                <p class="card-text"><?= $post->content; ?></p>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<?php endforeach; ?>
  </div>
<?php require "footer.html.php" ?>
<?php require "scripts.html.php" ?>
    </body>
</html>
