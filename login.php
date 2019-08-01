<?php include __DIR__ . '/config/config.php'; ?>
<?php include __DIR__ .'/config/paths.php'; ?>

<?php include INC .'header.php'; ?>

<div class="page-content header-home">
  <div class="media-column w-50"></div>
  <div class="container">
  <div class="row">
    <div class="col-md-6">
      <img class="img-fluid login-image" src="<?php echo $BASE_URL ?>assets/images/login.jpg" alt="Hello">
    </div>
    <div class="col-md-4 offset-md-2">
      <div class="form-login js-login-form">
        <div class="form-login__block js-form-block is-selected" id="signin">
          <form action="/" method="post">
            <div class="form-container">
              <h3 class="form-title t-center">Sign In</h3>
              
              <div class="form-group">
                <label for="login-user">Username or Email</label>
                <input
                  type="text"
                  name="login-user"
                  id="login-user"
                  class="form-input form-input--pill form-input--border-c-gallery"
                  required  
                  placehol  
                >
              </div><!-- .form-group -->

              <div class="form-group">
                <label for="login-password">Password</label>
                <input
                  type="password"
                  name="login-password"
                  id="login-password"
                  class="form-input form-input--pill form-input--border-c-gallery"
                  required
                  placeholder="******"
                >
              </div><!-- .form-group -->

              <div class="form-group">
                <div class="form-group__container">
                  <label for="remember-me" class="icheck_label">
                    <input type="checkbox" id="remember-me" name="iCheck">
                    Remember Me
                  </label>
                  <a href="#reset" class="c-gray js-block-trigger">Forgot Password?</a>
                </div><!-- .form-group__container -->
              </div><!-- .form-group -->

              <div class="form-group--submit">
                <button
                  class="button button--primary button--pill button--large button--block button--submit"
                  type="submit"
                >
                  Log In
                </button>
              </div>

              <div class="form-group--footer">
                <span class="c-gray">
                  Don't have an account? <a href="#signup" class="c-secondary t-underline js-block-trigger">Register</a>
                </span>
              </div>
            </div><!-- .form-container -->
          </form><!-- .signin -->
        </div><!-- .form-login__block -->

        <div class="form-login__block js-form-block" id="signup">
          <form>
            <div class="form-container">
              <h3 class="form-title t-center">Sign Up</h3>
              <div class="form-social">
                <div class="form-group">
                  <div class="form-group__wrapper">
                    <button
                      class="button button--social button--twitter button--pill button--large button--block"
                      type="button"
                    >
                      Connect to Twitter
                    </button>
                    <span class="form-group__icon form-group__icon--social">
                    <i class="fa fa-twitter c-white"></i>
                  </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->

                <div class="form-group">
                  <div class="form-group__wrapper">
                    <button
                      class="button button--social button--facebook button--pill button--large button--block"
                      type="button"
                    >
                      Connect to Facebook
                    </button>
                    <span class="form-group__icon form-group__icon--social">
                    <i class="fa fa-facebook-f c-white"></i>
                  </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->
              </div><!-- .form-social -->
              <div class="form-group">
                <label for="signup-email">Email *</label>
                <input
                  type="email"
                  name="signup-email"
                  id="signup-email"
                  class="form-input form-input--pill form-input--border-c-gallery"
                  required
                  placeholder="johndoe@gmail.com"
                >
              </div><!-- .form-group -->

              <div class="form-group">
                <label for="signup-name">Name *</label>
                <input
                  type="text"
                  name="signup-name"
                  id="signup-name"
                  class="form-input form-input--pill form-input--border-c-gallery"
                  required
                  placeholder="John Doe"
                >
              </div><!-- .form-group -->

              <div class="form-group">
                <label for="signup-password">Confirm new password *</label>
                <input
                  type="password"
                  name="signup-password"
                  id="signup-password"
                  class="form-input form-input--pill form-input--border-c-gallery"
                  required
                  placeholder="******"
                >
              </div><!-- .form-group -->

              <div class="form-group">
              <span class="c-gray">
                By creating an account your agree to our <a href="#" class="t-underline">Terms and Conditions</a>
                and our <a href="#" class="t-underline">Privacy Policy</a>
              </span>
              </div><!-- .form-group -->

              <div class="form-group--submit">
                <button
                  class="button button--primary button--pill button--large button--block button--submit"
                  type="submit"
                >
                  Sign Up
                </button>
              </div>

              <div class="form-group--footer">
              <span class="c-gray">
                Already have an account?
                <a href="#signin" class="c-secondary t-underline js-block-trigger">Sign in</a>
              </span>
              </div>
            </div><!-- .form-container -->
          </form><!-- .signup -->
        </div><!-- .form-login__block -->

        <div class="form-login__block js-form-block" id="reset">
          <form action="/" method="post">
            <div class="form-container">
              <div class="form-group">
                <label for="reset-password">Email</label>
                <input
                  type="email"
                  name="reset-password"
                  id="reset-password"
                  class="form-input form-input--pill form-input--border-c-gallery"
                  placeholder="johndoe@gmail.com"
                  required
                >
              </div><!-- .form-group -->

              <div class="form-group--submit">
                <button
                  class="button button--primary button--pill button--large button--block button--submit"
                  type="submit"
                >
                  Reset Password
                </button>
              </div>

              <div class="form-group--footer">
                <a href="#signin" class="c-secondary t-underline js-block-trigger">Back to Sign in</a>
              </div>
            </div><!-- .form-container -->
          </form><!-- .reset -->
        </div><!-- .form-login__block -->

      </div><!-- .form-login -->
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container -->
</div><!-- .page-content -->



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<script src="https://cdn.rawgit.com/googlemaps/v3-utility-library/master/infobox/src/infobox.js"></script>
<script src="assets/scripts/app.js"></script>
</body>
</html>
