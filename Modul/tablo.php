

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.omdbapi.com/?apikey=f2745e7a&i=tt6105098",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Postman-Token: 0161a21f-992c-4729-afdf-c0640d89ed65",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $response =json_decode($response, true);
  

}



echo "<table border='1' >";
echo "<tr>";
echo "<th height='150'>Item</th>";
echo "<th>Ürün Adı</th>";
echo "<th>Ekleme Tarihi</th>";
echo "<th>Gönderilen</th>";
echo "<th>Gönderen</th>";
echo "<th>Durum</th>";



echo "</tr>";

 
  
  $someJSON = '[{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';
  
  
  
  $someArray = json_decode($someJSON, true);





$kume = array("elma", "armut");
array_push($kume, "muz", "portakal","deneme1","deneme3");
for ($i=0;$i<=sizeof($response["Ratings"])-1;$i++){
  
  
   echo "<tr>";
   echo "<td>
 
   $kume[$i]
   
   </td>";
  
  
   
   echo "<td>",$response["Ratings"][$i]["Source"], "</td>";
   echo "<td>",$i*$i*$i,"</td>";
   echo "</tr>";
}
echo "</table>";
?>