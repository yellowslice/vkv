<?php
  $pageTitle='Pages List';
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
        include('include/sidebar.php');
        function remove($string,$remove){
          
        }

        ?>
        <main class="mn-inner">
            <div class="row">
                <style>
                  .pageList a{
                    text-transform: capitalize;
                  }
                </style>
                <div class="col s12 pageList">
                    <h3>Pages List</h3>
                    <?php 
                    if ($handle = opendir('.')) {
                      while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {
                          if (strpos($entry, '.php') !== false) {
                            $name = str_replace(".php","",$entry);
                            $name = str_replace("-"," ",$name);
                            echo "<a  href='$entry' target='_blank'>".$name."</a><br>";
                          }else if(strpos($entry, '.html') !== false){
                            $name = str_replace(".html","",$entry);
                            $name = str_replace("-"," ",$name);
                            echo "<a href='$entry' target='_blank'>".$name."</a><br>";
                          }else{

                          }
                        }
                      }
                      closedir($handle);
                    }
                  ?> 
                </div>
            </div>
        </main>
    </div>
    <div class="left-sidebar-hover"></div>
</body>
</html>