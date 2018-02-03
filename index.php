<?php
  
  include 'internal_files/php/functions.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <title>TSSChecker</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="internal_files/css/framework7.ios.min.css">
    <link rel="stylesheet" href="internal_files/css/framework7.ios.colors.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="internal_files/css/my-app.css">
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
              <a href="#" class="link icon-only open-panel"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLCAYAAAA4TnrqAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMASURBVHhe7Zy7ixNRFIdHsRMLsfCB2mgrYmdhKWgnNnY+migWbqNrcmeFLcRHJ74KK7HYtbBbBAu1cUGwWhS7Xf0XRESw+o3nTE4y2ZkbyV2TmXOz54Mfuzvn3MyZLxOSbIYkhmEYhmEYdeOwm3ItSfGIfj6bfLL7tK9TSZJtkQkioYOLdAC/kjTL6g8+UvbKJMrhezcF/AdSUxzWkpvYLxMpJsVn7wHUHfXCeDjf4E1FtbBbOOIdusmoFaZRFkelMK2yOOqEaZbFUSVMuyyOGmExyOKoEBaLrDxYpXcau2TyBohKFsXhuUzeALHJSvEnuY7tMn3NRCeL0sZRmb5mYpQ1l52Q6WvGZAVgsgIwWQGYrABMVgAmK4AgWQC9gn5P6X1Cs1zpcVgZqPey4ulb7tdTvMtvu9wzLPpl8cHgrKzq4nDV03dPqgW8rdzHawfh2x5VmHpZDp9kRcE4ZTH5R2KlPl8ikLUoKwrGL2uh0udLBA/DBVlRYLKG5b9k3a70ObSkWmCyiBRnSj1I2jgm1QKTJfBFIA6/KT+oZ0a2rsdkDTCfbZXf/JisAExWACYrgE0ny+FB0sl2bigpXlVuz5dIZZ3z9044UcpqZwdpe/1XDEYpi3F44e+fYKKVNYsdVPvgXzOhRCuLmc+20RnWorylvlXKtw1l1Kulo5Y1Lngf3n2XYrIIkxWAyQpgU8iawwHKIflrOB0cznuHMfWyHB73exyW8mfGMt1ny6WBvqdSWc9Uy+Khq30XpFrQwflKn++Ap0jWG1lRkGaXK30Od6VakOKOp++KVAscXlf6fFEvy+Fn5WrhUf9Fw9vKfbx2kFnsy/dR7vNF/5lFcfhOadGwJ/M4PKz24WW/3gtvK/fx2l69++p/rdIzLFHI0hKTFRCTFRCTFRCTFRIcl+lrhl8OeAdSnH+9ZZo4Dl+8Q2mMw1eZuiE6OE2ndrNfVTBSaEaetXEa/RKMEdKd7ZJMq4Ab2R6692YoT2i48kW0zYRn4Zl4NsMwDMMwDEMxSfIXgVJ6yTyHQz4AAAAASUVORK5CYII=" width="25p"></a>
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
              <div class="content-block-title">Saved Blobs</div>
              <div class="list-block accordion-list">
                <ul>
                  <li class="accordion-item">
                    <a href="#" class="item-link">
                      <div class="item-content">
                        <div class="item-media">
                          <img src="https://ipsw.me/api/images/320x/assets/images/devices/iPhone9,1.png" width="32px" height="auto">
                        </div>
                        <div class="item-inner">
                          <div class="item-title">Joseph's iPhone</div>
                          <div class="item-after">4 Blob(s)</div>
                        </div>
                      </div>
                    </a>
                    <div class="accordion-item-content">
                      <div class="list-block">
                        <ul>
                          <li class="">
                            <a href="#" class="item-link">
                              <div class="item-content">
                                <div class="item-media">
                                  <img src="https://ipsw.me/api/images/320x/assets/images/devices/iPhone9,1.png" width="32px" height="auto" style="opacity: 0;">
                                </div>
                                <div class="item-inner">
                                  <div class="item-title">iPhone9,1</div>
                                  <div class="item-after">11.2.5</div>
                                </div>
                              </div>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="item-link">
                              <div class="item-content">
                                <div class="item-media">
                                  <img src="https://ipsw.me/api/images/320x/assets/images/devices/iPhone9,1.png" width="32px" height="auto" style="opacity: 0;">
                                </div>
                                <div class="item-inner">
                                  <div class="item-title">iPhone9,1</div>
                                  <div class="item-after">11.2.2</div>
                                </div>
                              </div>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="item-link">
                              <div class="item-content">
                                <div class="item-media">
                                  <img src="https://ipsw.me/api/images/320x/assets/images/devices/iPhone9,1.png" width="32px" height="auto" style="opacity: 0;">
                                </div>
                                <div class="item-inner">
                                  <div class="item-title">iPhone9,1</div>
                                  <div class="item-after">11.2.1</div>
                                </div>
                              </div>
                            </a>
                          </li>
                          <li class="">
                            <a href="#" class="item-link">
                              <div class="item-content">
                                <div class="item-media">
                                  <img src="https://ipsw.me/api/images/320x/assets/images/devices/iPhone9,1.png" width="32px" height="auto" style="opacity: 0;">
                                </div>
                                <div class="item-inner">
                                  <div class="item-title">iPhone9,1</div>
                                  <div class="item-after">11.2</div>
                                </div>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
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
    <script type="text/javascript" src="internal_files/js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="internal_files/js/my-app.js"></script>
    <?php 
      echo deviceFirmwares();
    ?>
  </body>
</html>