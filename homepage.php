<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="UTF-8">
    <script type="text/javascript" src="javasc/hamburgerbar.js"></script>


<body>

    <link rel="stylesheet" href="./icons.css">
    <link href="css/hamburgerbar.css" type="text/css" rel="stylesheet" script="hamburgerbar" />
    <link href="css/ben.css" type="text/css" rel="stylesheet" script="scriptim" />
    <link href="css/fonts.css" type="text/css" rel="stylesheet" script="javasc/scriptim" />

    <div class="arkaplan">

        <div class="usttaraf">
            <?php include "./Modul/hamburgerbar.php"; ?>
            <span class="ustyazi" style="color:white;">Uyarılar</span>
        </div>


        <div class="MainForm MainBosluk">
            <div class="user-icon">
                <i class="icon icon-user"></i>
            </div>

            <div class="mainKullanici MainBosluk">
                <span style="font-size: 60px; "> <span> Hoşgeldiniz </span> <?php session_start();
                                                                            print_r($_SESSION["name"]) ?></span>
            </div>
            <div class="buttonContainer">
                <button class="mainbutton icon icon-notification " type="submit" name="btnbild" onclick="window.location.href = 'bildirim.php';"><span>Bildirim</span></button>

                <button class="mainbutton icon icon-search" type="submit" name="btnara" onclick="window.location.href = 'tumu.php';"><span>Ara</span></button>


                <button class="mainbutton icon icon-plus-roll " type="submit" name="btnekle" onclick="window.location.href = 'ekle.php';"><span>Ekle</span></button>
            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" async></script>
        <script type="text/javascript" src="javasc/scriptim.js"></script>
        <script type="text/javascript" src="javasc/hamburgerbar.js"></script>
    </div>
</body>
</head>
<script type="text/javascript" src="node_modules/jquery.min.js"></script>
<script type="text/javascript" src="javasc/hamburgerbar.js"></script>

</html>