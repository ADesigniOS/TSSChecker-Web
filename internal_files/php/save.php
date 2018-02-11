<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'functions.php';
	
	if (isset($_GET['deviceName']) && trim($_GET['deviceName']) != '') {
	    $deviceName = htmlentities(str_replace("..", ",", $_GET['deviceName']), ENT_QUOTES);
	    // $deviceName_clean = escapeshellarg($deviceName);
	} else {
	    $deviceName = '';
	}

	if (isset($_GET['deviceID']) && trim($_GET['deviceID']) != '') {
	    $deviceID = htmlentities(urldecode($_GET['deviceID']), ENT_QUOTES);
	    // $deviceID_clean = escapeshellarg($deviceID);
	} else {
	    $deviceID = '';
	}

	if (isset($_GET['version']) && trim($_GET['version']) != '') {
	    $version = htmlentities($_GET['version'], ENT_QUOTES);
	    // $version_clean = escapeshellarg($version);
	} else {
	    $version = '';
	}

	if (isset($_GET['ecid']) && trim($_GET['ecid']) != '') {
	    $ecid = htmlentities($_GET['ecid'], ENT_QUOTES);
	    // $ecid_clean = escapeshellarg($ecid);
	} else {
	    $ecid = '';
	}

	if (isset($_GET['boardconfig']) && trim($_GET['boardconfig']) != '') {
	    $boardconfig = htmlentities($_GET['boardconfig'], ENT_QUOTES);
	    // $boardconfig_clean = escapeshellarg($boardconfig);
	} else {
	    $boardconfig = '';
	}

	header('Content-Type: text/plain');

	if(saveBlobs($deviceName, $deviceID, $version, $ecid, $boardconfig)) {
		echo "status: success\ndevice: $deviceName\nmodel: $deviceID\nversion: $version\necid: $ecid";
	} else {
		echo "status: failed\ndevice: $deviceName\nmodel: $deviceID\nversion: $version\necid: $ecid";
	}

?>