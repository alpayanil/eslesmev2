<?php 

$code = $_GET['code']; //get fedid first code
$username = "Cfe5c4ae83aa9882adc606b7101219f12ab45be06"; //client id of fedid connection
$password = "SPzVGQGzkUooIBI72Va4bYTRVmqjwMfN6jMm5E4iboTKxJXNNMQhsuhN9YYWRQgt"; //client secret key of fedid connection
$redirect_uri = "http://test.decatr.com/denemeee/fedidconf.php";

$curl = curl_init(); //first curl
curl_setopt_array($curl, array(
CURLOPT_URL => "https://preprod.idpdecathlon.oxylane.com/as/token.oauth2",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_USERPWD => "$username:$password",
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => "grant_type=authorization_code&client_id=$username&code=$code&redirect_uri=$redirect_uri",
CURLOPT_HTTPHEADER => array(
"Content-Type: application/x-www-form-urlencoded",
"cache-control: no-cache"
),
));
$response = curl_exec($curl);//curl execute
$err = curl_error($curl);//curl error
curl_close($curl);//close curl
$resp = json_decode($response);//make an object
$tokencode = $resp -> access_token;
$idtoken = $resp -> id_token;

$curl2 = curl_init();//second curl
curl_setopt_array($curl2, array(
CURLOPT_URL => "https://preprod.idpdecathlon.oxylane.com/idp/userinfo.openid",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
'Authorization: Bearer ' . $tokencode
),
));


/* ACCESS_TOKEN */


$response2 = curl_exec($curl2);//curl execute
$err2 = curl_error($curl2);//curl error
curl_close($curl2);//close curl


$objectResp = json_decode($response2);//make an object
$arrayResp = (array) $objectResp;//result convert to array



//include "./controllers/session/sessions.php";//prepare sessions with user informations
//$url = "./controllers/welcome.php";
//header('Location: '.$url);//go first page

 include "./Modul/sesion.php"; 

 header("Location:http://test.decatr.com/denemeee/homepage.php");



/* $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://preprod.idpdecathlon.oxylane.com/idp/userinfo.openid",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept-Encoding: gzip, deflate",
    "Authorization: Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6Ik1BSU4ifQ.eyJzY29wZSI6WyJvcGVuaWQiLCJwcm9maWxlIl0sImNsaWVudF9pZCI6IkNmZTVjNGFlODNhYTk4ODJhZGM2MDZiNzEwMTIxOWYxMmFiNDViZTA2IiwiaXNzIjoiaWRwZGVjYXRobG9uLnByZXByb2Qub3JnIiwianRpIjoiQTlSSE85N0oyYSIsInN1YiI6Ik1LSUxJQzA4IiwidWlkIjoiTUtJTElDMDgiLCJleHAiOjE1NjQ2NzcxNjh9.IwkncfdrvzX-RKoZbuPRlrS_Pjliq4COHq9Vj6LNmAsxmbv-XY_A89vPsxVh1AXxJNXOlsTwKPP1gkrznEWnl0SwxqpNBOuJucAa97sCmmsmGtkvffhqGnIdkHqrQisAd6wV8hWXachni7qN-6YLzTFRI20odFu3MEzj2wdtm87dsWutlp76_PqHTXSeq-7_jwrPrC5hQDxvHjgof2HBFZ6cfOBP2lan0JS07yPxoucJwOYWy0pVhpqCbxqJpbbRJ2XAJvDt5YgjPoO5gGA-JuQLyxvohk_0BXj7GNc0Z-fafIPrnV_yf0rZk68M5mSAW7ToeDJB-HNmh0C8NRrC1w",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Cookie: nlbi_2082526=L7G1bjtVzDX5pSE8Z88T7gAAAAAmiDNHzzLYw+NVYRYui/wf; visid_incap_2082526=VjQyj7dsSJOThHU/2Xi2G3+IQl0AAAAAQUIPAAAAAAAZED+3siXe41XZc1N5+Q/S; PF=ierHhCi8BMDjcM7bGAqlDn; CookieFed-Oxylane.com=677680650.17955.0000; incap_ses_730_2082526=uSxtcUTEgXn8cH8BG3whCu3DQl0AAAAAoJ7QxqBer6IKEXPxohMQOQ==; incap_ses_474_2082526=0uoIHNhUNik+FJa13P2TBqD1Ql0AAAAAlVHac0f2p9hKkYvWKNdj9A==",
    "Host: preprod.idpdecathlon.oxylane.com",
    "Postman-Token: 0b69f4fc-8cf5-4cb8-90f2-a7e636c825e0,7a9dfbd5-a605-4413-94b1-d230c4999f7d",
    "User-Agent: PostmanRuntime/7.15.2",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
} */
?>