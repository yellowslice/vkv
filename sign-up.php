<?php
  $pageTitle='Sign Up Form';
  $pageKeyword='';
  $pageDiscription='';
  $pageId='homePage';
  $pageClasses ='gradientPinkVertical';
  $sidebarSetting = '';
  $headerType = 'login';
  include('include/head.php');
?>
    <body class="<?= $pageClasses; ?>" id='<?= $pageId; ?>'>
        <?php
        include('include/header-'.$headerType.'.php');
        include('include/sidebar.php');

        ?>
        <main class="mn-inner container ys-signup-container center-align">
            <div class="row">
                <div class="col s12">
                  <div class='ys-get-started'>
                    <h1>Thanks you for choosing VKV Click, one last step and you are done!</h1>
                    <h4>Select the services you are interested in below to continue</h4>
                    <form>
                      <ul class='ys-service-selection-list'>
                      <li>
                        
                        <p class="ys-service-checkbox">
                            <input type="checkbox" class="filled-in" name='services[]' id="s1" value="Flight Booking">
                            <label for="s1">Flight Booking</label>
                        </p>
                        <span class="icon-take-off-1"></span>
                      </li>
                      <li>
                        <p class="ys-service-checkbox">
                            <input type="checkbox" class="filled-in" name='services[]' id="s2"  value="Bus Booking">
                            <label for="s2">Bus Booking</label>
                        </p>
                        <span class="icon-bus"></span>
                      </li>
                      <li>
                        
                        <p class="ys-service-checkbox">
                            <input type="checkbox" class="filled-in" name='services[]' id="s3"  value="Hotel Booking">
                            <label for="s3">Hotel Booking</label>
                        </p>
                        <span class="icon-hotel-booking"></span>
                      </li>
                      <li>
                        
                        <p class="ys-service-checkbox">
                            <input type="checkbox" class="filled-in" name='services[]' id="s4"  value="Recharge Service">
                            <label for="s4">Recharge Service</label>
                        </p>
                        <span class="icon-recharge"></span>
                      </li>
                      <li>
                        <p class="ys-service-checkbox">
                            <input type="checkbox" class="filled-in" name='services[]' id="s5"  value="Money Transfer">
                            <label for="s5">Money Transfer</label>
                        </p>
                        <span class="icon-money-transfer"></span>
                      </li>
                      <li>
                        <p class="ys-service-checkbox">
                            <input type="checkbox" class="filled-in" name='services[]' id="s6"  value="Bill Payments">
                            <label for="s6">Bill Payments</label>
                        </p>
                        <span class="icon-bill-payments"></span>
                      </li>
                      <li>
                        <p class="ys-service-checkbox">
                            <input type="checkbox" class="filled-in" name='services[]' id="s7"  value="Flight Booking">
                            <label for="s7">Pan Card</label>
                        </p>
                        <span class="icon-subscribe"></span>
                      </li>
                      <li>
                        <p class="ys-service-checkbox">
                            <input type="checkbox" class="filled-in" name='services[]' id="s8"  value="Flight Booking">
                            <label for="s8">Gift Card</label>
                        </p>
                        <span class="icon-gift-card"></span>
                      </li>
                      </ul>
                      <button class="btn btn-large waves-effect waves-light white btn-rounded">Lets Get Started</button>
                    </form>
                    <span class='ys-note'>You can select multiple paid and free services gor your business on this online portal</span>
                  </div>

                </div>
            </div>
        </main>
    </div>
    <div class="left-sidebar-hover"></div>
</body>
</html>