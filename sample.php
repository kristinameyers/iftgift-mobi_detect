<?php 

include("mobil_detect.php");
$detect = new Mobile_Detect();


if ($detect->isAndroid()) {
    // code to run for the Google Android platform
}

if ($detect->isMobile()) {
  echo  "Mobile";
}

?>