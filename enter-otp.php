<?php
  $pageTitle='Enter OTP';
  $pageKeyword='';
  $pageDiscription='';
  $pageId='homePage';
  $pageClasses='';
  $sidebarSetting = '';
  $headerType = 'login';
  include('include/head.php');
?>
    <body class="<?= $pageClasses; ?>" id='<?= $pageId; ?>'>
        <?php
        include('include/header-'.$headerType.'.php');
        include('include/sidebar.php');

        ?>
        <main class="mn-inner container ys-signup-container">
          <div class='ys-login-box row'>

            

            <div class="col s12 m7">
              <div class='ys-login-form center-align gradientPinkHorizontal'>
                <form class="row">
                  <label for="filled-in-box-example">04:15 PM</a></label>
                  <h3 class="center-align">Enter OTP</h3>
                  <div class="input-field otp-field col s3">
                      <input id="icon_prefix" type="text" class="validate" maxlength="1">
                      <label for="icon_prefix" class=""></label>
                  </div>
                  <div class="input-field otp-field col s3">
                      <input id="icon_prefix" type="text" class="validate" maxlength="1">
                      <label for="icon_prefix" class=""></label>
                  </div>
                  <div class="input-field otp-field col s3">
                      <input id="icon_prefix" type="text" class="validate" maxlength="1">
                      <label for="icon_prefix" class=""></label>
                  </div>
                  <div class="input-field otp-field col s3">
                      <input id="icon_prefix" type="text" class="validate" maxlength="1">
                      <label for="icon_prefix" class=""></label>
                  </div>
                  <div class="input-field col s12">
                      <a href="#" class="center-align">Resend OTP</a>
                  </div>

                  <div class="input-field col s12">
                     <button class="btn btn-large waves-effect btn-ys-center waves-light white btn-rounded">Verify OTP</button>
                  </div>

                  <div class="input-field col s12">
                      <label for="filled-in-box-example">We’ve sent a OTP code to +91 9875932662 </a></label>
                  </div>

                </form>
              </div>

            </div>

            <div class="col s12 m5">
              <select class='select-rounded language-selector'>
                <option value="" disabled selected>Language</option>
                <option value="1">English</option>
                <option value="2">Hindi</option>
              </select>

              <div class='ys-login-info'>
                <h2>Have an account?</h2>
                <p>Welcome to VKV Click now grow your business ar a click and offer your clients a wide range of services</p>
                <a href='' class="btn btn-large btn-ys-purple waves-effect waves-light btn-rounded">Sign In</a>
              </div>
            </div>
          </div>
        </main>
    </div>
    <div class="left-sidebar-hover"></div>

</body>
</html>