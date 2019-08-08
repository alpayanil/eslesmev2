<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="node_modules/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/scriptim.js"></script>




<body class="body">
    <link rel="stylesheet" href="./icons.css">
    <link href="css/hamburgerbar.css" type="text/css" rel="stylesheet" script="hamburgerbar" />
    <link href="css/ben.css" type="text/css" rel="stylesheet" script="scriptim" />


    <div class="arkaplan4">
        <div class="usttaraf">

            <span style="color:white" class="ustyazi"> Api Manegement</span>
        </div>


        <div class="EkleForm2admin">


            <label for="uname"><b>Client Id:</b></label>
            <input id="boyut" name="id" type="text" maxlength="10">



            <button class="sorgubtn " id="buttonsa" type="submit" name="btnbild" value="dee"><span>Deneme</span></button>


            <p id="p1">Api Key</p>

            <script>
                $('#buttonsa').on('click', function() {

                    var inputVal = $('input').val();


                    $.ajax({
                        type: "POST",
                        url: "./Modul/apikeyalma.php",
                        data: {
                            data: inputVal
                        },
                        success: function(response) {
                            document.getElementById("p1").innerHTML = response;
                            console.log(response);
                        }
                    });

                })
            </script>
        </div>

    </div>
    <script type="text/javascript" src="javasc/hamburgerbar.js"></script>


</body>

</html>