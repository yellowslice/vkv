<?php
  $pageTitle='Flight Booking';
  $pageKeyword='';
  $pageDiscription='';
  $pageId='homePage';
  $pageClasses='';
  $sidebarSetting = 'fixed';
  $headerType = 'login';
  include('include/head.php');
?>
    <body class="<?= $pageClasses; ?>" id='<?= $pageId; ?>'>
        <?php
        include('include/header-'.$headerType.'.php');
        include('include/sidebar.php');

        ?>
        <main class="mn-inner container ys-signup-container">
          <div class="row">
              <div class="col s12">
                  <ul class="tabs flight-tabs z-depth-1" style="width: 100%;">
                      <li class="tab"><a href="#flight-rt" class="">Round Trip</a></li>
                      <li class="tab"><a class="" href="#flight-ow">One Way</a></li>
                      <li class="tab"><a href="#flight-ms">Multi City</a></li>
                  </ul>
              </div>
              <div id="flight-rt" class="col s12">
                <?php include('modules/flight-round-trip.php'); ?>
              </div>
              <div id="flight-ow" class="col s12">
                <?php include('modules/flight-one-way.php'); ?>
              </div>
              <div id="flight-ms" class="col s12">
                <?php include('modules/flight-multi-city.php'); ?>
              </div>
          </div>

          <div class="row">
            <div class="col s12">
              Offers:
            </div>
            
            <div class="col s6">
              <a href=''><img src='https://via.placeholder.com/500x175'></a>
            </div>
            <div class="col s6">
              <a href=''><img src='https://via.placeholder.com/500x175'></a>
            </div>
          </div>
        </main>
    </div>
    <div class="left-sidebar-hover"></div>

</body>
</html>