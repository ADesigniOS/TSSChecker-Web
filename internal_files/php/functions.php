<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);  

  function AppleTVList() {
    $devices = json_decode(file_get_contents("internal_files/json/firmwares_condensed.json"), true);
?>

  <?php $array_index = 0; ?>
  <?php foreach ($devices["devices"] as $id => $device): ?>
    <?php 
      $deviceName = $device['name'];
      $boardconfig = $device['BoardConfig'];
      $latest = $device['firmwares'][0]['version'];
    ?>
    <?php if (strpos($id, "AppleTV") !== false): ?>
      
      <div class="card appletv" style="background-image: linear-gradient(to right, #84c1ec, #66c4e7, #49c6dd, #36c6cc, #39c6b7); color: white;" onclick="$$('[class^=AppleTV]').hide(); $$('.<?php echo str_replace(',', '_', $id); ?>').show(); myApp.popup('.popup-appletv');">
            <div class="card-content">
                <div class="card-content-inner">
                  <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 500; font-size: 18px;"><?php echo "$deviceName"; ?></span>
                  <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 300; font-size: 13px;"><?php echo "on tvOS $latest"; ?></span>
                  <img src="https://ipsw.me/api/images/320x/assets/images/devices/<?php echo $id; ?>.png" width="35px" height="auto" style="display: inline-block;position: absolute;top: 50%;transform: translateY(-50%);float: right;opacity:0.4;right: 10%;">
                </div>
            </div>
        </div>
    <?php endif ?>
    <?php $array_index++; ?>
  <?php endforeach ?>

<?php

  }

  function iPadList() {
    $devices = json_decode(file_get_contents("internal_files/json/firmwares_condensed.json"), true);
?>

  <?php $array_index = 0; ?>
  <?php foreach ($devices["devices"] as $id => $device): ?>
    <?php 
      $deviceName = $device['name'];
      $boardconfig = $device['BoardConfig'];
      $latest = $device['firmwares'][0]['version'];
    ?>
    <?php if (strpos($id, "iPad") !== false): ?>
      
      <div class="card ipad" style="background-image: linear-gradient(to right, #a626d0, #822dbf, #5f2eac, #3d2b97, #1a2680); color: white;" onclick="$$('[class^=iPad]').hide(); $$('.<?php echo str_replace(',', '_', $id); ?>').show(); myApp.popup('.popup-ipad');">
            <div class="card-content">
                <div class="card-content-inner">
                  <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 500; font-size: 18px;"><?php echo "$deviceName"; ?></span>
                  <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 300; font-size: 13px;"><?php echo "on iOS $latest"; ?></span>
                  <img src="https://ipsw.me/api/images/320x/assets/images/devices/<?php echo $id; ?>.png" width="35px" height="auto" style="display: inline-block;position: absolute;top: 50%;transform: translateY(-50%);float: right;opacity:0.4;right: 10%;">
                </div>
            </div>
        </div>
    <?php endif ?>
    <?php $array_index++; ?>
  <?php endforeach ?>

<?php

  }

  function iPhoneList() {
    $devices = json_decode(file_get_contents("internal_files/json/firmwares_condensed.json"), true);
?>

  <?php $array_index = 0; ?>
  <?php foreach ($devices["devices"] as $id => $device): ?>
    <?php 
      $deviceName = $device['name'];
      $boardconfig = $device['BoardConfig'];
      $latest = $device['firmwares'][0]['version'];
    ?>

    <?php if (strpos($id, "iPhone") !== false): ?>

      <div class="card iphone" style="background-image: linear-gradient(to right, #f28ca8, #f48a9f, #f58995, #f5898c, #f48982); color: white;" onclick="$$('[class^=iPhone]').hide(); $$('.<?php echo str_replace(',', '_', $id); ?>').show(); myApp.popup('.popup-iphone');">
            <div class="card-content">
                <div class="card-content-inner">
                  <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 500; font-size: 18px;"><?php echo "$deviceName"; ?></span>
                  <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 300; font-size: 13px;"><?php echo "on iOS $latest"; ?></span>
                  <img src="https://ipsw.me/api/images/320x/assets/images/devices/<?php echo $id; ?>.png" width="35px" height="auto" style="display: inline-block;position: absolute;top: 50%;transform: translateY(-50%);float: right;opacity:0.4;right: 10%;">
                </div>
            </div>
        </div>
    <?php endif ?>
    <?php $array_index++; ?>
  <?php endforeach ?>

<?php

  }

  function iPodList() {
    $devices = json_decode(file_get_contents("internal_files/json/firmwares_condensed.json"), true);
?>

  <?php $array_index = 0; ?>
  <?php foreach ($devices["devices"] as $id => $device): ?>
    <?php 
      $deviceName = $device['name'];
      $boardconfig = $device['BoardConfig'];
      $latest = $device['firmwares'][0]['version'];
    ?>

    <?php if (strpos($id, "iPod") !== false): ?>
      
      <div class="card ipod" style="background-image: linear-gradient(to right, #c7a9ff, #baa6ff, #aca3fe, #9da0fd, #8d9dfc); color: white;" onclick="$$('[class^=iPod]').hide(); $$('.<?php echo str_replace(',', '_', $id); ?>').show(); myApp.popup('.popup-ipod');">
            <div class="card-content">
                <div class="card-content-inner">
                  <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 500; font-size: 18px;"><?php echo "$deviceName"; ?></span>
                  <span style="display:block; margin-left: 10px; margin-top: 5px; font-weight: 300; font-size: 13px;"><?php echo "on iOS $latest"; ?></span>
                  <img src="https://ipsw.me/api/images/320x/assets/images/devices/<?php echo $id; ?>.png" width="35px" height="auto" style="display: inline-block;position: absolute;top: 50%;transform: translateY(-50%);float: right;opacity:0.4;right: 10%;">
                </div>
            </div>
        </div>
    <?php endif ?>
    <?php $array_index++; ?>
  <?php endforeach ?>

<?php

  }

  function deviceFirmwares() {
    $devices = json_decode(file_get_contents("internal_files/json/firmwares_condensed.json"), true);
    ?>

    <div class="popup popup-appletv">
      <div class="view">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">Apple TV</div>
            <div class="right sliding"><a href="#" class="close-popup"><b><span>Close</span></b></a></div>
          </div>
        </div>
        <div class="pages">
          <div class="page" data-page="appletv_versions">
            <div class="page-content">
              <br><br>
              <div class="content-block-title">Versions</div>
              <div class="list-block">
                <ul>
                  <?php $array_index = 0; ?>
                  <?php foreach ($devices["devices"] as $id => $device): ?>
                    <?php 
                      $deviceName = $device['name'];
                      $boardconfig = $device['BoardConfig'];
                      $firmwares = $device['firmwares'];
                    ?>
                    <?php if (strpos($id, "AppleTV") !== false): ?>
                      <?php foreach ($firmwares as $firmware): ?>
                        <li class="<?php echo str_replace(',', '_', $id); ?>" style="display: none;">
                          <a href="pages/check.php?name=<?php echo $deviceName; ?>&device=<?php echo str_replace(',', '..', $id); ?>&boardconfig=<?php echo $boardconfig; ?>&version=<?php echo $firmware['version']; ?>" class="close-popup item-link">
                            <div class="item-content">
                              <div class="item-media">
                                <img src="https://ipsw.me/api/images/320x/assets/images/devices/<?php echo $id; ?>.png" width="32px" height="auto">
                              </div>
                              <div class="item-inner">
                                <?php echo $firmware['version']; ?>
                              </div>
                            </div>
                          </a>
                        </li>
                      <?php endforeach ?>
                      <?php $array_index++; ?>
                    <?php endif ?>
                  <?php endforeach ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="popup popup-ipad">
      <div class="view">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">iPad</div>
            <div class="right sliding"><a href="#" class="close-popup"><b><span>Close</span></b></a></div>
          </div>
        </div>
        <div class="pages">
          <div class="page" data-page="ipad_versions">
            <div class="page-content">
              <br><br>
              <div class="content-block-title">Versions</div>
              <div class="list-block">
                <ul>
                  <?php $array_index = 0; ?>
                  <?php foreach ($devices["devices"] as $id => $device): ?>
                    <?php 
                      $deviceName = $device['name'];
                      $boardconfig = $device['BoardConfig'];
                      $firmwares = $device['firmwares'];
                    ?>
                    <?php if (strpos($id, "iPad") !== false): ?>
                      <?php foreach ($firmwares as $firmware): ?>
                        <li class="<?php echo str_replace(',', '_', $id); ?>" style="display: none;">
                          <a href="pages/check.php?name=<?php echo $deviceName; ?>&device=<?php echo str_replace(',', '..', $id); ?>&boardconfig=<?php echo $boardconfig; ?>&version=<?php echo $firmware['version']; ?>" class="close-popup item-link">
                            <div class="item-content">
                              <div class="item-media">
                                <img src="https://ipsw.me/api/images/320x/assets/images/devices/<?php echo $id; ?>.png" width="32px" height="auto">
                              </div>
                              <div class="item-inner">
                                <?php echo $firmware['version']; ?>
                              </div>
                            </div>
                          </a>
                        </li>
                      <?php endforeach ?>
                    <?php endif ?>
                    <?php $array_index++; ?>
                  <?php endforeach ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="popup popup-iphone">
      <div class="view">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">iPhone</div>
            <div class="right sliding"><a href="#" class="close-popup"><b><span>Close</span></b></a></div>
          </div>
        </div>
        <div class="pages">
          <div class="page" data-page="iphone_versions">
            <div class="page-content">
              <br><br>
              <div class="content-block-title">Versions</div>
              <div class="list-block">
                <ul>
                  <?php $array_index = 0; ?>
                  <?php foreach ($devices["devices"] as $id => $device): ?>
                    <?php 
                      $deviceName = $device['name'];
                      $boardconfig = $device['BoardConfig'];
                      $firmwares = $device['firmwares'];
                    ?>
                    <?php if (strpos($id, "iPhone") !== false): ?>
                      <?php foreach ($firmwares as $firmware): ?>
                        <li class="<?php echo str_replace(',', '_', $id); ?>" style="display: none;">
                          <a href="pages/check.php?name=<?php echo $deviceName; ?>&device=<?php echo str_replace(',', '..', $id); ?>&boardconfig=<?php echo $boardconfig; ?>&version=<?php echo $firmware['version']; ?>" class="close-popup item-link">
                            <div class="item-content">
                              <div class="item-media">
                                <img src="https://ipsw.me/api/images/320x/assets/images/devices/<?php echo $id; ?>.png" width="32px" height="auto">
                              </div>
                              <div class="item-inner">
                                <?php echo $firmware['version']; ?>
                              </div>
                            </div>
                          </a>
                        </li>
                      <?php endforeach ?>
                    <?php endif ?>
                    <?php $array_index++; ?>
                  <?php endforeach ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="popup popup-ipod">
      <div class="view">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">iPod</div>
            <div class="right sliding"><a href="#" class="close-popup"><b><span>Close</span></b></a></div>
          </div>
        </div>
        <div class="pages">
          <div class="page" data-page="ipod_versions">
            <div class="page-content">
              <br><br>
              <div class="content-block-title">Versions</div>
              <div class="list-block">
                <ul>
                  <?php $array_index = 0; ?>
                  <?php foreach ($devices["devices"] as $id => $device): ?>
                    <?php 
                      $deviceName = $device['name'];
                      $boardconfig = $device['BoardConfig'];
                      $firmwares = $device['firmwares'];
                    ?>
                    <?php if (strpos($id, "iPod") !== false): ?>
                      <?php foreach ($firmwares as $firmware): ?>
                        <li class="<?php echo str_replace(',', '_', $id); ?>" style="display: none;">
                          <a href="pages/check.php?name=<?php echo $deviceName; ?>&device=<?php echo str_replace(',', '..', $id); ?>&boardconfig=<?php echo $boardconfig; ?>&version=<?php echo $firmware['version']; ?>" class="close-popup item-link">
                            <div class="item-content">
                              <div class="item-media">
                                <img src="https://ipsw.me/api/images/320x/assets/images/devices/<?php echo $id; ?>.png" width="32px" height="auto">
                              </div>
                              <div class="item-inner">
                                <?php echo $firmware['version']; ?>
                              </div>
                            </div>
                          </a>
                        </li>
                      <?php endforeach ?>
                    <?php endif ?>
                    <?php $array_index++; ?>
                  <?php endforeach ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

  }

  function listBlobs() {
    $blobs = json_decode(file_get_contents("blobs/blobs.json"), true);
    // print_r($cache);
    foreach ($blobs["devices"] as $name => $deviceBlobs) {
     
      ?>

      <li class="accordion-item">
        <a href="#" class="item-link">
          <div class="item-content">
            <div class="item-media">
              <img src="https://ipsw.me/api/images/320x/assets/images/devices/iPhone9,1.png" width="32px" height="auto">
            </div>
            <div class="item-inner">
              <div class="item-title"><?php echo $name; ?></div>
              <div class="item-after"><?php echo count($deviceBlobs['blobs']); ?> Blob(s)</div>
            </div>
          </div>
        </a>
        <div class="accordion-item-content">
          
          <div class="list-block special">
            <ul>
              <li class="">
                <a href="#" class="item-link">
                  <div class="item-content">
                    <div class="item-media">
                      <img src="https://ipsw.me/api/images/320x/assets/images/devices/iPhone9,1.png" width="32px" height="auto" style="opacity: 0;">
                    </div>
                    <div class="item-inner">
                      <div class="item-title">Save available blobs</div>
                      <div class="item-after"></div>
                    </div>
                  </div>
                </a>
              </li>
              <br>
              <?php foreach ($deviceBlobs['blobs'] as $savedBlobs): ?>
                <li class="">
                  <a href="#" class="item-link">
                    <div class="item-content">
                      <div class="item-media">
                        <img src="https://ipsw.me/api/images/320x/assets/images/devices/iPhone9,1.png" width="32px" height="auto" style="opacity: 0;">
                      </div>
                      <div class="item-inner">
                        <div class="item-title"><?php echo $deviceBlobs['identifier']; ?></div>
                        <div class="item-after"><?php echo $savedBlobs['version']; ?></div>
                      </div>
                    </div>
                  </a>
                </li>
                <br>
              <?php endforeach ?>
            </ul>
          </div>

        </div>
      </li>

      <?php

    }
  }

  function saveBlobs($deviceName, $deviceID, $version, $ecid) {

      $dir = dirname(__FILE__);

      $dir = str_replace("/internal_files/php", "", $dir);
      
      $savePath = "$dir/blobs/$deviceName/$version";
      if (!file_exists($savePath)) {
        $old_umask = umask(0);
        umask($old_umask);
        mkdir($savePath, 0777, true);
      }

      $version_unescaped = $version;

      $deivceID = escapeshellarg($deviceID);
      $ecid = escapeshellarg($ecid);
      $version = escapeshellarg($version);

      $dir = dirname(__FILE__);

      $dir = str_replace("/internal_files/php", "", $dir);

      chmod("$dir/blobs/$deviceName/$version_unescaped/", 0777);

      $cmd  = "cd ../; ./tsschecker/tsschecker_macos";
      $cmd .= " -d $deviceID";
      $cmd .= " -e $ecid";
      $cmd .= " -i $version";
      // $cmd .= " --buildid $buildID";
      $cmd .= " --save-path $dir/blobs/$deviceName/$version_unescaped/";
      $cmd .= " -s";
      $shell = shell_exec($cmd);
      if ($shell) {
        echo $shell;
        // echo "$dir/blobs/$deviceName/$version_unescaped/";
        return true;
      } else {
        // echo "$dir/blobs/$deviceName/$version_unescaped/";
        return false;
      }

    }

?>