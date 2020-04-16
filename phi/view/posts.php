<div class="<?= $class ?? 'posts' ?>">

  <?php if (isset($posts)): ?>
    <?php foreach ($posts as $post): ?>
      <?= $view('post', $post) ?>
    <?php endforeach ?>
    <?php else: ?>
      <p>No posts yet</p>
  <?php endif ?>

  <?= $view('post-pagination') ?>

</div>