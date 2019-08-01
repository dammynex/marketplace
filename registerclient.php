<?php include __DIR__ . '/config/config.php'; ?>
<?php include __DIR__ .'/config/paths.php'; ?>

<?php include INC .'header.php'; ?>

<!-- #masthead -->
<section class="page-banner page-banner--layout-3 parallax" style="padding: 50px 0;">
  <div class="container">
    <div class="page-banner__container animated zoomIn">
      <div class="page-banner__textcontent t-center">
        <h2 class="page-banner__title c-white">Become a member </h2>
        <p class="page-banner__subtitle c-white">Get your projects done by skilled professionals.</p>
      </div><!-- .page-banner__textcontent -->
    </div><!-- .page-banner__container -->
  </div><!-- .container -->
</section><!-- .page-banner -->


<section class="dream-places page-section dream-places--layout-1">
  <div class="container">
    <p class="page-section__subtitle t-center c-boulder"><a href="login.html">Already have a account? Login</a></p>

    <div class="row mt-4">
      <div class="col-md-6 offset-md-3">

        <form action="">
          
          <fieldset>
            <div class="form-row my-2">
              
              <div class="col-sm-6">
                <label for="businessName">First Name</label>
                <input type="text" class="form-control" id="businessName" placeholder="Ajanaku,">
              </div>
              <div class="col-sm-6">
                <label for="businessName">Last Name</label>
                <input type="text" class="form-control" id="businessName" placeholder="Seun">
              </div>
            </div>
            <div class="form-group">
              <label for="WhatIdo">Username</label>
              <input type="text" class="form-control" id="WhatIdo" placeholder="Sells UK used phones">
            </div>
            <div class="form-group">
              <label for="merchEmail">Email</label>
              <input type="email" class="form-control" id="merchEmail" aria-describedby="emailHelp" placeholder="Enter email">
              
            </div>
            <div class="form-group">
              <label for="phoneNumber">Phone Number</label>
              <input type="tel" class="form-control" id="WhatIdo" placeholder="Phone">
            </div>
            <div class="form-group">
              <label for="Address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Address...">
            </div>
            <div class="form-row my-2">
              <div class="col-sm-6">
                  <label for="businessName">Country</label>
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Country...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label for="businessName">State</label>
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>State...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
            <div class="form-group">
              <label class="text-bold" for="Password">Password</label>
              <input type="password" class="form-control" id="Password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-success btn-gradient action-button">Become a member</button>
          </fieldset>
          
        </form>

	
      </div>
    </div>
  </div><!-- .container -->
</section><!-- .categories -->


<?php include INC . 'footer.php'; ?>
