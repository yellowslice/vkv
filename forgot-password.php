<?php
  $pageTitle='Forgot Password';
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
        if($sidebarSetting == 'fixed')
        include('include/sidebar.php');

        ?>
        <main class="mn-inner container ys-signup-container">
          <div class='ys-login-box row'>
            <div class="col s12 m7">
              <div class='ys-login-form gradientPinkHorizontal'>
                <form class="row">
                  <h1 class="center-align">Forgot Password</h1>
                  <div class="input-field col s12">
                      <i class="icon-mobile-1 prefix"></i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix" class="">Mobile Number</label>
                  </div>
                  <div class="input-field col s12">
                     <button class="btn btn-large waves-effect btn-ys-center waves-light white btn-rounded">Submit</button>
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