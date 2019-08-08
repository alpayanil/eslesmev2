<?php

$username = "Cfe5c4ae83aa9882adc606b7101219f12ab45be06"; //client id of fedid connection
$redirect_uri = "http://test.decatr.com/denemeee/fedidconf.php";
$url = "https://preprod.idpdecathlon.oxylane.com/as/authorization.oauth2?response_type=code&client_id=$username&scope=openid%20profile&redirect_uri=$redirect_uri";
header('Location: ' . $url);   
?>