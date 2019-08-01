<?php include __DIR__ . '/config/config.php'; ?>
<?php include __DIR__ .'/config/paths.php'; ?>

<?php include INC .'header.php'; ?>


<div class="page-content">
  <div class="breadcrumbs-container">
  <div class="container">
    <ul class="breadcrumbs min-list inline-list">
      <li class="breadcrumbs__item">
        <a href="index.html" class="breadcrumbs__link">
          <span class="breadcrumbs__title">Home</span>
        </a>
      </li>

      <li class="breadcrumbs__item">
        <a href="#" class="breadcrumbs__link">
          <span class="breadcrumbs__title">Pages</span>
        </a>
      </li>

      <li class="breadcrumbs__item">
        <span class="breadcrumbs__page c-gray">404</span>
      </li>
    </ul><!-- .breadcrumbs -->
  </div><!-- .container -->
</div>
  <section class="error-404 t-center">
    <div class="container">
      <h2 class="error-404__title">404</h2>
      <p class="error-404__subtitle">Oops. Sorry, we can't find that page!</p>
      <a class="error-404__button button button--square button--medium button--secondary c-secondary" href="index.php">Go Back Home</a>
    </div>
  </section>
</div>


<?php include INC . 'footer.php'; ?>