<?php include __DIR__ . '/config/config.php'; ?>
<?php include __DIR__ .'/config/paths.php'; ?>

<?php include INC .'header.php'; ?>

<!-- #masthead -->
<section class="page-banner page-banner--layout-3 parallax" style="padding: 50px 0;">
  <div class="container">
    <div class="page-banner__container animated zoomIn">
      <div class="page-banner__textcontent t-center">
        <h2 class="page-banner__title c-white">Register Your Business</h2>
        <p class="page-banner__subtitle c-white">Present yourself to the world and get customers.</p>
      </div><!-- .page-banner__textcontent -->
    </div><!-- .page-banner__container -->
  </div><!-- .container -->
</section><!-- .page-banner -->


<section class="dream-places page-section dream-places--layout-1">
  <div class="container">
    <!-- <h2 class="page-section__title t-center">Popular Categories</h2> -->
    <p class="page-section__subtitle t-center c-boulder"><a href="login.html">Already have a business account? Login</a></p>

    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <form action="">
          
          <fieldset>
            <div class="form-group">
              <label for="businessName">Business Name</label>
              <input type="text" class="form-control" id="businessName" placeholder="Business Name">
            </div>
            <div class="form-group">
              <label for="cat">Choose Category</label>
              <select class="custom-select" required>
                <option value="Automobile repair">Automobile Repair</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="form-group">
              <label for="WhatIdo">What do you do?</label>
              <input type="text" class="form-control" id="WhatIdo" placeholder="Sells UK used phones">
            </div>
            <div class="form-group">
              <label for="artEmail">Business Email</label>
              <input type="email" class="form-control" id="artEmail" aria-describedby="emailHelp" placeholder="Enter email">
              
            </div>
            <div class="form-group">
              <label for="phoneNumber">Business Phone Number</label>
              <input type="tel" class="form-control" id="WhatIdo" placeholder="Phone">
            </div>
            
            <input type="button" id="next"  name="next" class=" btn btn-info" value="Next" />
          </fieldset>
          
          <fieldset style="display: none;">
            <h2> Personal Details</h2>
            <div class="form-group">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
            </div>
            <div class="form-group">
              <label for="first_name">Username</label>
              <input type="text" class="form-control" name="first_name" id="user_name" placeholder="Username">
            </div>
            <div class="form-group">
              <label class="text-bold" for="Password">Password</label>
              <input type="password" class="form-control" id="Password" placeholder="Password">
            </div>
            <div class="form-group">
              <label class="text-bold" for="Password">Confirm password</label>
              <input type="password" class="form-control" id="Password" placeholder="Password">
            </div>


            <input type="button" id="prev" name="previous" class="btn btn-default" value="Previous" />
            <input type="submit" id="next"  name="next" class=" btn btn-success" value="Become an Artisan" />
          </fieldset>

          
          <!-- <button type="submit" class="btn btn-gradient next action-button">Register</button> -->
        </form>

	
      </div>
    </div>
  </div><!-- .container -->
</section><!-- .categories -->



<?php include INC. 'footer.php'; ?>