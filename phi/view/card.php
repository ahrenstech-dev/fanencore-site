<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
  <div class="col p-4 d-flex flex-column position-static">
    <strong class="d-inline-block mb-2 text-<?= $color ?? 'primary' ?>"><?= $category ?? 'Featured' ?></strong>
    <h3 class="mb-0"><?= $title ?></h3>
    <div class="mb-1 text-muted"><?= date('M j', $date) ?></div>
    <p class="card-text mb-auto"><?= $text ?></p>
    <a href="#" class="stretched-link">Continue reading</a>
  </div>
  <div class="col-auto d-none d-lg-block">
    <?= phi\view('img', $image) ?>
  </div>
</div>