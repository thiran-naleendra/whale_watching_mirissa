<?php
// Basic site config
$SITE_URL = "https://whalewatchingmirissa.com";
$SITE_NAME = "Whale Watching Mirissa";
$WHATSAPP = "94713121061";
$PHONE = "+94 71 312 1061";
$EMAIL = "whalewatchingmirissa@gmail.com";

function h($s){ return htmlspecialchars($s ?? "", ENT_QUOTES, "UTF-8"); }

function canonical($path){
  global $SITE_URL;
  $path = ltrim($path, "/");
  return rtrim($SITE_URL, "/") . "/" . $path;
}

function whatsapp_link($text){
  global $WHATSAPP;
  return "https://wa.me/".$WHATSAPP."?text=" . rawurlencode($text);
}
?>
