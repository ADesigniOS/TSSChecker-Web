<?php
  
  include 'functions.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>TSSChecker Web</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="css/framework7.ios.min.css">
    <link rel="stylesheet" href="css/framework7.ios.colors.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="css/my-app.css">
  </head>
  <body class="layout-white">
    <div id="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar"><img class="icon" src="https://raziraz.github.io/codepen/img/bolt.svg">
    </div>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
        <p>Left panel content goes here</p>
      </div>
    </div>
    <!-- Right panel with cover effect-->
    <div class="panel panel-right panel-cover">
      <div class="content-block">
        <p>Right panel content goes here</p>
      </div>
    </div>
    <!-- Views-->
    <div class="views" id="site">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We have home navbar without left link-->
            <div class="center sliding">TSSChecker</div>
            <div class="right">
              <!-- <a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a> -->
            </div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content">
              <div class="content-block-title">Devices</div>
              <div class="list-block accordion-list">
                <ul>
                  <li class="accordion-item"><a href="#" class="item-content item-link">
                      <div class="item-inner">
                        <div class="item-title">Apple TV</div>
                      </div></a>
                    <div class="accordion-item-content">
                      <?php echo AppleTVList(); ?>
                    </div>
                  </li>
                  <li class="accordion-item"><a href="#" class="item-content item-link">
                      <div class="item-inner">
                        <div class="item-title">iPad</div>
                      </div></a>
                    <div class="accordion-item-content">
                      <?php echo iPadList(); ?>
                    </div>
                  </li>
                  <li class="accordion-item"><a href="#" class="item-content item-link">
                      <div class="item-inner">
                        <div class="item-title">iPhone</div>
                      </div></a>
                    <div class="accordion-item-content">
                      <?php echo iPhoneList(); ?>
                    </div>
                  </li>
                  <li class="accordion-item"><a href="#" class="item-content item-link">
                      <div class="item-inner">
                        <div class="item-title">iPod</div>
                      </div></a>
                    <div class="accordion-item-content">
                      <?php echo iPodList(); ?>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <!-- <div class="toolbar">
          <div class="toolbar-inner"><a href="#" class="link">Link 1</a><a href="#" class="link">Link 2</a></div>
        </div> -->
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="js/my-app.js"></script>
    <?php 
      echo deviceFirmwares();
    ?>
  </body>
</html>