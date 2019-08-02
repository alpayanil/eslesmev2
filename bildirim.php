

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


<div class="arkaplan3">



<div class="usttaraf">
  <?php include "./Modul/hamburgerbar.php"; ?>
 <span class="ustyazi" style="color:white;">Bildirimler</span> 
</div>
 
  <div class="buttonContainer2">

    <button class="btnben" type="submit" name="btnben" onclick="window.location.href = 'bildirim.php';" >Eşini Seç </button>
    <button class="arabutton" type="submit" name="btnmag" onclick="window.location.href = 'gidenbildirim.php';">Giden İstekler</button>
    <button class="arabutton" type="submit" name="btntum" onclick="window.location.href = 'Gelenbildirim.php';">Gelen İstekler</button> </div>



    <div class ="AraForm">
  
   <?php include "./Modul/esinisectablo.php";?>
   
<div class="vol2" style="display:none">
   <?php include "./Modul/esinisecvol2.php";?></div>
   </div>
 


</div>

</body>


<script type="text/javascript" src="javasc/hamburgerbar.js"></script>



</html>