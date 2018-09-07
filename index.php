<?php
$cht = "qr";
$chs = "250x200";
$url = 'https://www.google.com/';
$chl = urlencode($url);
$choe = "UTF-8";
$qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $chs . '&chl=' . $chl . '&choe=' . $choe;

?>

<img src="<?=$qrcode;?>" style="width188px;height188px;">