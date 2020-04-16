<div class="row">
  <div class="col-4 p-4">
    <?= $view('img', $logo) ?>
  </div>
  <div class="col p-4">
    <?= $view('img', $banner) ?>
  </div>
</div>
<?= $view('menu', $menu) ?>
<?= $view('breadcrumbs', $select('title')) ?>
