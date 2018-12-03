<?php
$host = isset($_REQUEST['ip']) ? $_REQUEST['ip'] : $_SERVER["REMOTE_ADDR"];
$ip = gethostbyname($host);
echo $ip;
?>