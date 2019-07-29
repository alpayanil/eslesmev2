

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
</head>
<script type="text/javascript" src="node_modules/jquery.min.js"></script>

<body class="body">

<link rel="stylesheet" href="./icons.css">
<link href="css/hamburgerbar.css" type="text/css" rel="stylesheet" script="hamburgerbar"/>
<link href="css/ben.css" type="text/css" rel="stylesheet" script="scriptim"/>
<link href="css/fonts.css" type="text/css" rel="stylesheet" script="javasc/scriptim"/>


<div class="arkaplan2">



<div class="usttaraf">
  <?php include "./Modul/hamburgerbar.php"; ?>
 <span class="ustyazi" style="color:white;">Tümünü Listele</span> 
</div>
 
  <div class="buttonContainer2">

    <button class="btnben" type="submit" name="btnben" onclick="window.location.href = 'tumu.php';" >Benim Eklediklerim </button>
    <button class="arabutton" type="submit" name="btnmag" onclick="window.location.href = 'tumumagaza.php';">Mağazam</button>
    <button class="arabutton" type="submit" name="btntum" onclick="window.location.href = 'tumutummagaza.php';">Tüm Mağazalar</button> </div>

        <hr size="14x" color=#0082C3>

<br><div class="babadiv">
<div class="sorgulama">
<div class="item">
      <span>Item Code:</span> 
      <input class="item-code" type="text" name="name">
     
      </div>
       <div class="buttoncuuu"> <input class="sorgubtn" type="button" value="Sorgula"> </div>
      </div>

    <div class ="AraForm">


   <?php include "./Modul/tablo.php";?>
   </div>


</div>
</div>

</body>


<script type="text/javascript" src="javasc/hamburgerbar.js"></script>



</html>