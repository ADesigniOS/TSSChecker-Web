# TSSChecker Web :iphone:


**TSSChecker** is now web based thanks to @DanielD3V.

**TSSChecker Web** allows people to easily and quickly check the signing status of iOS & tvOS versions with a nice, clean and easy to use User Interface!


Installation
------------

  To install **TSSChecker Web** you will need either a Linux VPS, Linux Desktop, macOS VPS or a macOS Desktop, you will also need LAMP/XAMPP server running on said VPS/Desktop.
  
  If you are using macOS you don't have to modify anything however if you are using linux you will need to change the following.

Linux:

**File:** pages/check.php

**FROM**
    
    $output = shell_exec("cd ../internal_files; ./tsschecker/tsschecker_macos -d $device_clean --boardconfig $boardconfig_clean -i $version_clean");
    
**TO**

	$output = shell_exec("cd ../internal_files; ./tsschecker/tsschecker_linux -d $device_clean --boardconfig $boardconfig_clean -i $version_clean");

Coming Soon
---------------

* Blob Saving


Thanks
------

**DanielD3V** © 2018+, Norway. Released under the [MIT License].<br>
Authored and maintained by DanielD3B. Cruz with help from [contributors].

> [DanielD3V.us](http://danield3v.us) &nbsp;&middot;&nbsp;
> GitHub [@danieldevofficial](https://github.com/danieldevofficial) &nbsp;&middot;&nbsp;
> Twitter [@DanielD3V](https://twitter.com/DanielD3V)

[MIT License]: http://mit-license.org/
[contributors]: http://github.com/danieldevofficial/TSSChecker-Web/contributors