<div class="post">
  <h2 class="post-title"><?= $title ?></h2>
  <p class="post-meta">
    <?= date('F j, Y', $date) ?>
    by <?= $view('author', $author) ?>
  </p>
  <?= $body ?>
</div>