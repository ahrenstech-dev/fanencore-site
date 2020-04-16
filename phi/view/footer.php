<?php extract($contact) ?>
<footer class="bg-dark text-white mt-4 pt-4">

  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left mt-3 pb-3">

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"><?= $company ?></h6>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>
      </div>

      <hr class="w-100 clearfix d-md-none">

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Links</h6>
        <p>
          <a href="#!">Link 1</a>
        </p>
        <p>
          <a href="#!">Link 2</a>
        </p>
        <p>
          <a href="#!">Link 3</a>
        </p>
        <p>
          <a href="#!">Link 4</a>
        </p>
      </div>

      <hr class="w-100 clearfix d-md-none">

      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="#!">Link 1</a>
        </p>
        <p>
          <a href="#!">Link 2</a>
        </p>
        <p>
          <a href="#!">Link 3</a>
        </p>
        <p>
          <a href="#!">Link 4</a>
        </p>
      </div>

      <hr class="w-100 clearfix d-md-none">

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> <?= $city ?>, <?= $state ?> <?= substr($zip, 0, 5) ?></p>
        <p>
          <i class="fas fa-envelope mr-3"></i> <?= $email ?></p>
        <p>
          <i class="fas fa-phone mr-3"></i> <?= $phone ?></p>
      </div>
    </div>
    <hr>

    <div class="row d-flex align-items-center">
      <div class="col-md-7 col-lg-8">
        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="#">
            <strong><?= $company ?></strong>
          </a>
        </p>
      </div>

      <div class="col-md-5 col-lg-4 ml-lg-0">
        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</footer>