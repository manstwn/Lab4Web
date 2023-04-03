<?php
$mod = @$_REQUEST['mod'];
switch ($mod) {
  case "index":
    require("index.php");
    break;
  case "tambah":
    require("tambah.php");
    break;
  case "ubah":
    require("ubah.php");
    break;   
 default:
 require("error.php");
}
?>