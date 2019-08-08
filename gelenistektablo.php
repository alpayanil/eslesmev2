

<?php
echo "<table border='1' >";
echo "<tr>";
echo "<th width='16%'>Ürün Resmi</th>";
echo "<th width='16%'>Item</th>";

echo "<th width='16%'>Ürün Adı</th>";
echo "<th width='16%'>Tarih</th>";
echo "<th width='16%'>İsteyen</th>";

echo "<th>Yapmak İstediğin</th>";


echo "</tr>";

 

  $someJSON = '[{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';
  
  
  
  $someArray = json_decode($someJSON, true);




$kume = array("elma", "armut", "armut", "armut", "armut", "armut", "armut", "armut", "armut", "armut", "armut", "armut", "armut", "armut", "armut", "armut");
array_push($kume, "muz", "portakal","deneme1","deneme3");
for ($i=0;$i<=sizeof($kume)-1;$i++){
  
  
   echo "<tr>";
   echo "<td>
 
   $kume[$i]
   
   </td>";
  
   
   
   echo "<td>", $i * $i * $i, "</td>";
   echo "<td>",$i*$i*$i,"</td>";   echo "<td>",$i*$i*$i,"</td>";
   echo "<td>",$i*$i*$i,"</td>";

   echo "<td><input type='button' class='sorgubtn' value='Onayla'><input type='button' class='sorgubtnred' value='Red Et'></td>";
   echo "</tr>";
}
echo "</table>";
?>