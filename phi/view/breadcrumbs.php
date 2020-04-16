<nav aria-label="breadcrumb" class="pt-3">
  <ol class="breadcrumb">
    <?php [,$active] = array_pop($items) ?>
    <?php foreach ($items as [$link, $title]): ?>
    <li class="breadcrumb-item"><a href="<?= $link ?>"><?= $title ?></a></li>
    <?php endforeach ?>
    <li class="breadcrumb-item active" aria-current="page"><?= $active ?></li>
  </ol>
</nav>
