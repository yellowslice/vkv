<?php
  $pageTitle='Verify OTP';
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
        <h1>You Can have any page</h1>

        <div class="fullwidth-popup">
          <div class="fullwidth-popup-container">
            <img src='assets/img/processing.png'>
            <h1>Processing your booking now..</h1>
          </div>
        </div>
</body>
</html>