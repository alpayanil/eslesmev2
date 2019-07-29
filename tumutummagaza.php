<html xmlns="http://www.w3.org/1999/xhtml">

<script type="text/javascript" src="javasc/scriptim.js"></script>
<script type="text/javascript" src="node_modules/jquery.min.js"></script>

<body class="body">
<link href="css/fonts.css" type="text/css" rel="stylesheet" script="javasc/scriptim"/>

<link rel="stylesheet" href="./icons.css">
<link href="css/hamburgerbar.css" type="text/css" rel="stylesheet" script="hamburgerbar"/>
<link href="css/ben.css" type="text/css" rel="stylesheet" script="scriptim"/>

<div class="arkaplan2">
<div class="usttaraf"> 
   
<?php include "./Modul/hamburgerbar.php"; ?>
 <span style="color:white"class="ustyazi">Tüm Ürünler</span>
</div>
<div class="buttonContainer2">


<button class="arabutton" type="submit" name="btnben" onclick="window.location.href = 'tumu.php';">Benim Eklediklerim
</button>
<button class="arabutton" type="submit" name="btnmag"
  onclick="window.location.href = 'tumumagaza.php';">Mağazam</button>
<button class="btnben" type="submit" name="btntum" onclick="window.location.href = 'tumutummagaza.php';">Tüm
  Mağazalar</button>
      
</div>
 
      <div>
       
<table style="width:100%" 
 
  
  <tr>

    
<hr size="14x" color=#0082C3 >
<div class="sorgulama">
<div class="item">
      <span>Item Code:</span> 
      <input class="item-code" type="text" name="name">
     
      </div>
       <div class="buttoncuuu"> <input class="sorgubtn" type="button" value="Sorgula"> </div>
      </div>
<?php include "./Modul/tablo.php";?>

</div>
</div>
</div>


<script type="text/javascript" src="javasc/hamburgerbar.js"></script>

</body>
</html>