<?php
  $pageTitle='Pincode';
  $pageKeyword='';
  $pageDiscription='';
  $pageId='homePage';
  $pageClasses ='';
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
                  <h1 class="center-align">Sign Up</h1>
                  <div class="input-field col s12">
                      <i class="icon-discount prefix"></i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix" class="">Invite Code (Optional)</label>
                  </div>
                  <div class="input-field col s12">
                      <i class="icon-location prefix"></i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix" class="">Your Area Pincode</label>
                  </div>  
                  <a href='' class="detectLocationBtn"><i class="icon-detect-location prefix"></i> Detect my current location</a>
                  <div class="input-field col s12">
                     <button class="btn btn-large waves-effect btn-ys-center waves-light white btn-rounded">Send OTP</button>
                  </div>


                  <ul class='breadCrumbCircle'>
                    <li><span></span></li>
                    <li><span class="active"></span></li>
                  </ul>
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