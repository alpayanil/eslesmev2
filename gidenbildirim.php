

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
 <span class="ustyazi" style="color:white;">Bildirimler</span> 
</div>
 
  <div class="buttonContainer2">

    <button class="arabutton" type="submit" name="btnben" onclick="window.location.href = 'bildirim.php';" >Eşini Seç </button>
    <button class="btnben" type="submit" name="btnmag" onclick="window.location.href = 'gidenbildirim.php';">Giden İstekler</button>
    <button class="arabutton" type="submit" name="btntum" onclick="window.location.href = 'Gelenbildirim.php';">Gelen İstekler</button> </div>



    <div class ="AraForm">
  
        <hr size="14x" color=#0082C3>
   <?php include "./Modul/gidenistektablo.php";?>

   </div>
 


</div>

</body>


<script type="text/javascript" src="javasc/hamburgerbar.js"></script>



</html>