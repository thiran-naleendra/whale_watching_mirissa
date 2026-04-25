<?php
// Basic site config
$SITE_URL = "https://whalewatchingmirissa.com";
$SITE_NAME = "Whale Watching Mirissa";
$WHATSAPP = "94713121061";
$PHONE = "+94 71 312 1061";
$EMAIL = "whalewatchingmirissa@gmail.com";
$BOOKING_URL = "https://booking.whalewatchingmirissa.com";

$ADDRESS_LINE_1 = "Mirissa Harbour";
$ADDRESS_LINE_2 = "Mirissa, Sri Lanka";
$LATITUDE = 5.94774;
$LONGITUDE = 80.45188;

function h($s){ return htmlspecialchars($s ?? "", ENT_QUOTES, "UTF-8"); }

function canonical($path = ""){
  global $SITE_URL;
  $path = ltrim($path, "/");
  return rtrim($SITE_URL, "/") . "/" . $path;
}

function site_href($path = ""){
  $script = str_replace("\\", "/", $_SERVER["SCRIPT_NAME"] ?? "/");
  $base = rtrim(dirname($script), "/");
  if ($base === "" || $base === ".") {
    $base = "";
  }

  $path = trim($path, "/");
  return $base . "/" . $path;
}

function whatsapp_link($text){
  global $WHATSAPP;
  return "https://wa.me/".$WHATSAPP."?text=" . rawurlencode($text);
}

function phone_href($phone = null){
  global $PHONE;
  return "tel:" . preg_replace('/[^\d+]/', '', $phone ?? $PHONE);
}
?>
