<?php
$file = 'releases/payondego.apk';
require_once("./script/configs.php");

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    _saveDWNLD();
    // header("location: https://play.google.com/store/apps/details?id=com.");
    exit;
}
?>