<?php
session_start();



echo "<table border='1' >";
echo "<tr>";
echo "<th width='16%'>Ürün Resmi</th>";
echo "<th width='16%'>Item</th>";
echo "<th width='16%'>Ürün Adı</th>";
echo "<th width='16%'>Ekleme Tarihi</th>";
echo "<th width='16%'>Kullanıcı</th>";
echo "<th width='16%'>Seç</th>";


echo "</tr>";



$someJSON = '[{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';



$someArray = json_decode($someJSON, true);





$kume = array("elma", "armut");
array_push($kume, "muz", "portakal", "deneme1", "deneme3");
for ($i = 0; $i <= sizeof($someArray) - 1; $i++) {


  echo "<tr>";
  echo "<td>
 
   $kume[$i]
   
   </td>";


  echo "<td>", $someArray[$i]["name"], "</td>";
  echo "<td>", $_SESSION["storenumber"], "</td>";
  echo "<td>", $i * $i * $i, "</td>";
  echo "<td>", $i * $i * $i, "</td>";
  echo "<td><input id='secbtn' type='button' value='seç' class='sorgubtn'></td>";

  echo "</tr>";
}
echo "</table>";
?> 
<script>
  $('#secbtn').on('click', function() {


    $('#bildirim1').show()

  })
</script>