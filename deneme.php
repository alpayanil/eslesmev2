<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="node_modules/jquery.min.js"></script>
<link href="css/fonts.css" type="text/css" rel="stylesheet" script="javasc/scriptim" />


<body class="body">
     <link rel="stylesheet" href="./icons.css">
     <link href="css/hamburgerbar.css" type="text/css" rel="stylesheet" script="hamburgerbar" />
     <link href="css/ben.css" type="text/css" rel="stylesheet" script="scriptim" />


    <div class="arkaplan4">
        <div class="usttaraf">

            <?php include "./Modul/hamburgerbar.php"; ?>
            <span style="color:white" class="ustyazi"> Ürün Ekle</span>
         </div>


        <div class="EkleForm">


            <label for="uname"><b>Ürün Item Kodu:</b></label>
            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>

            <button class="EkleForm button" type="button" onclick="$('#ekle1').show()">Ürün Bul</button>

         </div>


        <div class="EkleForm2" id="ekle1" style="display:none">
            <?php include "./Modul/ekletablosu.php"; ?><button class="EkleForm button" type="button">Ürün Bul</button>



         </div>

     </div>
    <script type="text/javascript" src="javasc/hamburgerbar.js"></script>

</body>

</html>