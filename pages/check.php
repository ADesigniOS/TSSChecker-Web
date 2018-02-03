<?php
  if (isset($_GET['device']) && trim($_GET['device']) != '') {
      $device = htmlentities(str_replace("..", ",", $_GET['device']), ENT_QUOTES);
      $device_clean = escapeshellarg($device);
  } else {
      $device = '';
  }

  if (isset($_GET['name']) && trim($_GET['name']) != '') {
      $name = htmlentities(urldecode($_GET['name']), ENT_QUOTES);
  } else {
      $name = '';
  }

  if (isset($_GET['version']) && trim($_GET['version']) != '') {
      $version = htmlentities($_GET['version'], ENT_QUOTES);
      $version_clean = escapeshellarg($version);
  } else {
      $version = '';
  }

  if (isset($_GET['boardconfig']) && trim($_GET['boardconfig']) != '') {
      $boardconfig = htmlentities($_GET['boardconfig'], ENT_QUOTES);
      $boardconfig_clean = escapeshellarg($boardconfig);
  } else {
      $boardconfig = '';
  }

  if ($device != '' && $version != '' && $boardconfig != '') {
      $title =  $device.' - '.$version;
      $allargsset = true;
  } else {
      $title = 'TTSChecker | Bad Info';
      $allargsset = false;
  }

  function GetBetween($content,$start,$end){
      $r = explode($start, $content);
      if (isset($r[1])){
          $r = explode($end, $r[1]);
          return $r[0];
      }
      return '';
  }
?>
<!-- We don't need full layout here, because this page will be parsed with Ajax-->
<!-- Top Navbar-->
<div class="navbar">
  <div class="navbar-inner">
    <div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i><span></span></a></div>
    <div class="center sliding"><?php echo $name; ?></div>
    <div class="right">
    </div>
  </div>
</div>
<div class="pages">
  <!-- Page, data-page contains page name-->
  <div data-page="signing_status" class="page">
    <!-- Scrollable page content-->
    <div class="page-content">
      <div class="content-block-title">Signing Status</div>
      <?php 
        $cache = json_decode(file_get_contents("../internal_files/json/status_cache.json"), true);
        // print_r($cache);
        foreach ($cache["devices"] as $id => $deviceCache) {
          if ($id == $device) {
            $firmware_caches = $deviceCache['firmwares'];
            foreach ($firmware_caches as $firmware_cache) {
              if ($firmware_cache['version'] == $version) {
                $firmware_url = $firmware_cache['url'];
                if ($firmware_cache['signed']) {
                  $signed_text = "is signed!";
                  $signed = "yes";
                } elseif (!$firmware_cache['signed']) {
                  $signed_text = "is not signed!";
                  $signed = "no";
                } else {
                  $signed_text = "an unknown error occured!";
                  $signed = "no";
                }
              }
            }
          }
        }
      ?>
      <?php if ($signed == "yes"): ?>
        <div class="card signed" style="background-image: linear-gradient(to right, #84c1ec, #66c4e7, #49c6dd, #36c6cc, #39c6b7); color: white;">
        <?php else: ?>
          <div class="card notsigned" style="background-image: linear-gradient(to right, #f28ca8, #f48a9f, #f58995, #f5898c, #f48982); color: white;">
      <?php endif ?>

          <div class="card-content">
              <div class="card-content-inner">
                <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 500; font-size: 20px;"><?php echo "$name"; ?></span>
                <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 300; font-size: 13px;">
                  <?php if (strpos($device, "AppleTV") !== false): ?>
                    <?php echo "on tvOS $version"; ?></span>
                  <?php else: ?>
                    <?php echo "on iOS $version"; ?></span>
                  <?php endif ?>
                <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 300; font-size: 13px;">
                  <?php echo $signed_text; ?>
                </span>
                <img src="https://ipsw.me/api/images/320x/assets/images/devices/<?php echo $device; ?>.png" width="40px" height="auto" style="display: inline-block;position: absolute;top: 50%;transform: translateY(-50%);float: right;opacity: 0.3;filter: gray;-webkit-filter: grayscale(1);filter: grayscale(1);right: 10%;">
              </div>
          </div>
      </div>

      <div class="content-block-title">Download IPSW</div>

      <?php if ($signed == "yes"): ?>
        <div class="card" style="background-image: linear-gradient(to right, #84c1ec, #66c4e7, #49c6dd, #36c6cc, #39c6b7); color: white;" onclick="window.location.href = '<?php echo $firmware_url; ?>'">
        <?php else: ?>
          <div class="card" style="background-image: linear-gradient(to right, #f28ca8, #f48a9f, #f58995, #f5898c, #f48982); color: white;" onclick="window.location.href = '<?php echo $firmware_url; ?>'">
      <?php endif ?>

          <div class="card-content">
              <div class="card-content-inner">
                <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 500; font-size: 20px;"><?php echo "$name"; ?></span>
                <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 300; font-size: 13px;">
                  <?php if (strpos($device, "AppleTV") !== false): ?>
                    <?php echo "on tvOS $version"; ?></span>
                  <?php else: ?>
                    <?php echo "on iOS $version"; ?></span>
                  <?php endif ?>
                <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 300; font-size: 13px;">
                  Click to download
                </span>
                <img src="https://ipsw.me/api/images/320x/assets/images/devices/<?php echo $device; ?>.png" width="40px" height="auto" style="display: inline-block;position: absolute;top: 50%;transform: translateY(-50%);float: right;opacity: 0.3;filter: gray;-webkit-filter: grayscale(1);filter: grayscale(1);right: 10%;">
              </div>
          </div>
      </div>

    </div>
  </div>
</div>