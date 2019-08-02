

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
    $response = json_decode($response, true);
}



echo "<table border='1' >";
echo "<tr>";
echo "<th height='10'>Item</th>";
echo "<th>Ürün Adı</th>";
echo "<th>Ekleme Tarihi</th>";
echo "<th>Gönderilen</th>";
echo "<th>Gönderen</th>";
echo "<th>Durum</th>";
echo "<th>Ürünü Kaldır</th>";



echo "</tr>";



$someJSON = '[{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';



$someArray = json_decode($someJSON, true);





$kume = array("123", "213123", "332", "7777", "666", "1321620");
array_push($kume, "muz", "portakal", "deneme1", "deneme3");
/*for ($i=0;$i<=sizeof($response["Ratings"])-1;$i++){*/
for ($i = 0; $i <= sizeof($kume) - 1; $i++) {
    echo "<tbody id='myTable'>";

    echo "<tr>";
    echo "<td>
 
   $kume[$i]
   
   </td>";



    echo "<td>", $response["Ratings"][$i]["Source"], "</td>";
    echo "<td>", asdsa, "</td>";
    echo "<td>", $i * $i * $i, "</td>";
    echo "<td>", $i * $i * $i, "</td>";
    echo "<td>", $i * $i * $i, "</td>";

    echo "<td><input type='button' value='Sil' class='sorgubtnred'></td>";

    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";
?>