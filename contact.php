<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Listiry</title>
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,600" rel="stylesheet">
  <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>
<header id="masthead" class="site-header site-header--fluid bg-primary">
  <div class="d-lg-flex justify-content-lg-between align-items-lg-center site-header__container">
    <div class="d-lg-flex align-items-lg-center">
      <div class="site-header__logo">
        <a href="index.html">
          <h1 class="screen-reader-text">Listiry</h1>
          <img src="assets/images/logo-1.png" alt="Listiry">
        </a>
      </div><!-- .site-header__logo -->

      <form class="search-form" action="index.html">
        <div class="form-group__wrapper">
          <input type="text" name="place" placeholder="coffee shop, dinner..." class="form-input form-input--no-br">
        </div>
        <div class="form-group__wrapper">
          <input type="text" name="location" placeholder="location" class="form-input form-input--no-br">
          <a href="#" class="form-group__action c-dusty-gray">
            <i class="fa fa-map-marker"></i>
          </a>
        </div>
        <div class="form-group__wrapper">
          <button type="submit" class="button button--primary button--medium">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </form>
    </div>

    <div class="d-lg-flex align-items-lg-center">
      <ul class="min-list main-navigation main-navigation--white">
        <li>
          <a href="#">Home</a>
          <ul class="min-list">
            <li>
              <a href="index.html">Home 1</a>
            </li>
            <li>
              <a href="index-2.html">Home 2</a>
            </li>
            <li>
              <a href="index-3.html">Home 3</a>
            </li>
            <li>
              <a href="index-4.html">Home 4</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Listings</a>
          <ul class="min-list">
            <li>
              <a href="listing-1.html">Listings Column Map 1</a>
            </li>
            <li>
              <a href="listing-2.html">Listings Column Map 2</a>
            </li>
            <li>
              <a href="listing-3.html">Listings Column Map 3</a>
            </li>
            <li>
              <a href="listing-5.html">Listings Fullwidth Map</a>
            </li>
            <li>
              <a href="listing-4.html">Listings Without Map</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Single Listing</a>
          <ul class="min-list">
            <li>
              <a href="single-listing-1.html">Single Listing 1</a>
            </li>
            <li>
              <a href="single-listing-2.html">Single Listing 2</a>
            </li>
            <li>
              <a href="single-listing-3.html">Single Listing 3</a>
            </li>
            <li>
              <a href="single-listing-4.html">Single Listing 4</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Pages</a>
          <ul class="min-list">
            <li>
              <a href="#">My Account</a>
              <ul class="min-list">
                <li>
                  <a href="profile.html">My Profile</a>
                </li>
                <li>
                  <a href="my-listings.html">My Listings</a>
                </li>
                <li>
                  <a href="bookmarked-listings.html">Bookmarked Listings</a>
                </li>
                <li>
                  <a href="change-password.html">Change Password</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="contact.html">Contact</a>
            </li>
            <li>
              <a href="coming-soon.html">Coming Soon</a>
            </li>
            <li>
              <a href="404.html">404 Page</a>
            </li>
            <li>
              <a href="pricing-table.html">Pricing Table</a>
            </li>
            <li>
              <a href="login.html">Login/Signup</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="blog.html">Blog</a>
        </li>
      </ul><!-- .main-navigation -->

      <div class="user-action">
        <a href="login.html" class="sign-in c-white">
          <i class="fa fa-user"></i>
          Sign in
        </a>
        <button class="button button--small button--pill button--primary d-none d-lg-inline-block">&plus; Add Listing</button>
      </div><!-- .user-action -->
    </div>

    <div class="d-lg-none nav-mobile">
      <a href="#" class="nav-toggle js-nav-toggle nav-toggle--white">
        <span></span>
      </a><!-- .nav-toggle -->
    </div><!-- .nav-mobile -->
  </div><!-- .site-header__container -->
</header><!-- #masthead -->
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
        <span class="breadcrumbs__page c-gray">Contact Us</span>
      </li>
    </ul><!-- .breadcrumbs -->
  </div><!-- .container -->
</div>
  <section class="contact-container">
  <div class="container">
    <h2 class="page-section__title">Get in Touch</h2>
    <p class="c-dove-gray">We're available from Monday to Friday, 07:30-19:00 to take your call</p>

    <div class="contact-list">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="contact t-center">
            <div class="contact-icon bg-primary">
              <i class="fa fa-map-marker"></i>
            </div>
            <h3 class="contact-type">Address</h3>
            <p class="c-dove-gray">60 Grant Ave, Central New Road 0707, UK</p>
          </div><!-- .contact -->
        </div><!-- .col -->

        <div class="col-md-6 col-lg-3">
          <div class="contact t-center">
            <div class="contact-icon bg-primary">
              <i class="fa fa-mobile"></i>
            </div>
            <h3 class="contact-type">Phone</h3>
            <a href="tel:+841234567890" class="c-dove-gray">(+84) 123 456 7890</a>
            <a href="tel:+849876543210" class="c-dove-gray">(+84) 987 654 3210</a>
          </div><!-- .contact -->
        </div><!-- .col -->

        <div class="col-md-6 col-lg-3">
          <div class="contact t-center">
            <div class="contact-icon bg-primary">
              <i class="fa fa-envelope"></i>
            </div>
            <h3 class="contact-type">Mail</h3>
            <a href="mailto:listiry@listiry.com" class="c-dove-gray">listiry@listiry.com</a>
            <a href="mailto:support@listiry.com" class="c-dove-gray">support@listiry.com</a>
          </div><!-- .contact -->
        </div><!-- .col -->

        <div class="col-md-6 col-lg-3">
          <div class="contact t-center">
            <div class="contact-icon bg-primary">
              <i class="fa fa-share-alt"></i>
            </div>
            <h3 class="contact-type">Social</h3>
            <ul class="min-list inline-list social-list">
              <li>
                <a href="#">
                  <i class="fa fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-pinterest"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div><!-- .contact -->
        </div><!-- .col -->
      </div><!-- .row -->
    </div><!-- .contact-list -->

    <div class="row">
      <div class="col-md-6">
        <h2 class="page-section__title">Our Location</h2>
        <div class="contact-map-container">
          <div id="contact-map" class="map"></div>
        </div><!-- .contact-map-container -->
      </div><!-- .col -->

      <div class="col-md-6">
        <h2 class="page-section__title">Contact Us</h2>
        <form action="/" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Your full name *</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="form-input form-input--large form-input--border-c-alto"
                  placeholder="John Doe"
                  required
                >
              </div><!-- .form-group -->
            </div><!-- .col -->

            <div class="col-md-6">
              <div class="form-group">
                <label for="email">Your email *</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="form-input form-input--large form-input--border-c-alto"
                  placeholder="johndoe@gmail.com"
                  required
                >
              </div><!-- .form-group -->
            </div><!-- .col -->

            <div class="col-md-12">
              <div class="form-group">
                <label for="message">Your message</label>
                <textarea
                  name="message"
                  id="message"
                  rows="10"
                  class="form-input form-input--large form-input--border-c-alto"
                  placeholder="Your comment"></textarea>
              </div><!-- .form-group -->
            </div><!-- .col -->

            <div class="col-md-12">
              <div class="form-group--submit">
                <button class="button button--large button--square button--primary" type="submit">Send Message</button>
              </div>
            </div><!-- .col -->
          </div><!-- .row -->
        </form>
      </div><!-- .col -->
    </div><!-- .row -->
  </div><!-- .container -->
</section><!-- .contact -->
</div><!-- .page-content -->
<footer id="colophone" class="site-footer">
  <div class="t-center site-footer__primary">
    <div class="container">
      <div class="site-footer__logo">
        <a href="index.html">
          <h1 class="screen-reader-text">Listiry</h1>
          <img src="assets/images/logo-footer.png" alt="Listiry">
        </a>
      </div>
      <p class="t-small">Listiry is making finding destination faster, easier, and customized for you.</p>
      <ul class="min-list inline-list site-footer__links site-footer__social">
        <li>
          <a href="#">
            <i class="fa fa-facebook-f"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-pinterest"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-google-plus"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-linkedin"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-youtube"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- .site-footer__primary -->

  <div class="site-footer__secondary">
    <div class="container">
      <div class="site-footer__secondary-wrapper">
        <p class="site-footer__copyright">&copy; 2018
          <span class="c-secondary">Listiry</span> by Felix. All Rights Reserved.</p>
        <ul class="min-list inline-list site-footer__links site-footer__details">
          <li>
            <a href="tel:+0987654321">Tel: +098 765 4321</a>
          </li>
          <li>
            <a href="#">Get this theme</a>
          </li>
          <li>
            <a href="#">About</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- .site-footer__secondary -->
</footer><!-- #colophone -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<script src="https://cdn.rawgit.com/googlemaps/v3-utility-library/master/infobox/src/infobox.js"></script>
<script src="assets/scripts/app.js"></script>
</body>
</html>
