<nav class="nav d-flex justify-content-between">
  <?php foreach ($items as [$link, $label]): ?>
    <a href="<?= $link ?>"><?= $label ?></a>
  <?php endforeach ?>
</nav>
