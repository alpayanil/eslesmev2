

<?php
session_start();
echo "<table border='1' >";
echo "<tr>";
echo "<th width='10%'>#</th>";
echo "<th width='30%'>Mağaza No</th>";
echo "<th width='30%'>Ekleyen</th>";
echo "<th width='30%'>Seç</th>";





echo "</tr>";

 

  $someJSON = '[{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';
  
  
  
  $someArray = json_decode($someJSON, true);




$kume = array("elma", "armut");
array_push($kume, "muz", "portakal","deneme1","deneme3");
for ($i=0;$i<=sizeof($someArray)-1;$i++){
  
  
   echo "<tr>";
   echo "<td>
 
   $kume[$i]
   
   </td>";
  
   
   
   echo "<td>",$someArray[$i]["name"], "</td>";
   echo "<td>", $_SESSION["name"], "</td>";
   echo "<td><input type='checkbox'></td>";
   echo "</tr>";
}
echo "</table>";

?>