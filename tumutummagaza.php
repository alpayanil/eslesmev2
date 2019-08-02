<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="node_modules/jquery.min.js"></script>


<body class="body">
  <link rel="stylesheet" href="./icons.css">
  <link href="css/hamburgerbar.css" type="text/css" rel="stylesheet" script="hamburgerbar" />
  <link href="css/ben.css" type="text/css" rel="stylesheet" script="scriptim" />
  <link href="css/fonts.css" type="text/css" rel="stylesheet" script="javasc/scriptim" />


  <div class="arkaplan2">



    <div class="usttaraf">
      <?php include "./Modul/hamburgerbar.php"; ?>
      <span class="ustyazi" style="color:white;">Tümünü Listele</span>
    </div>

    <div class="buttonContainer2">

      <button class="arabutton" type="submit" name="btnben" onclick="window.location.href = 'tumu.php';">Benim Eklediklerim </button>
      <button class="arabutton" type="submit" name="btnmag" onclick="window.location.href = 'tumumagaza.php';">Mağazam</button>
      <button class="btnben" type="submit" name="btntum" onclick="window.location.href = 'tumutummagaza.php';">Tüm Mağazalar</button>



    </div>


    <div class="EkleForm">


      <label for="uname"><b>Ürün Item Kodu:</b></label>
      <input name="uruntxt" id="myInput" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
      <script>
        $(document).ready(function() {
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
      </script>
      <button class="EkleForm button" id="de" type="button">Ürün Bul</button>

    </div>

    <div class="tablooo">


      <?php include "./Modul/tablo.php"; ?>
    </div>


  </div>


</body>

</head>
<script type="text/javascript" src="node_modules/jquery.min.js"></script>

<script type="text/javascript" src="javasc/hamburgerbar.js"></script>



</html>