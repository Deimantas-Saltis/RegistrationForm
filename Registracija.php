    <!DOCTYPE html>
    <html lang="lt">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/datepicker.css"/>
        <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
        <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>

        <script>
            $(function(){
                $('.datepicker').datepicker({
                    format: 'yyyy-mm-dd'
                });
            });
        </script>

</head>
<body class="bgSpalva">


    <div class="navbar navbar-inverse navbar-fixed-bottom navbar-inner container-fluid"></div>
    <div class="navbar navbar-inverse navbar-fixed-top navbar-inner container-fluid"></div>



    <form class="text-center aukstis" method="post">

        <!--Vardas-->
        <div class="form-group col-lg-4 col-lg-offset-4">
            <label for="vardas" class="col-sm-2 control-label">Vardas: </label>
            <div class="col-sm-10">
                <input type="text" name="Php_vardas" value="<?php if(isset($_POST["Php_vardas"])) echo $_POST["Php_vardas"]; ?>" class="form-control" id="vardas" placeholder="Vardas">
            </div>
        </div>

        <!--Pavarde-->
        <div class="form-group col-lg-4 col-lg-offset-4 tarpaiTarpLauku">
            <label for="pavarde" class="col-sm-2 control-label">Pavardė: </label>
            <div class="col-sm-10">
                <input type="text" name="Php_pavarde" value="<?php if(isset($_POST["Php_pavarde"])) echo $_POST["Php_pavarde"]; ?>" class="form-control" id="pavarde" placeholder="Pavardė">
            </div>
        </div>

        <!--Emailas-->
        <div class="form-group col-lg-4 col-lg-offset-4 tarpaiTarpLauku">
            <label for="emailas" class="col-sm-2 control-label">El-paštas:</label>
            <div class="col-sm-10">
                <input type="email" name="Php_pastas" value="<?php if(isset($_POST["Php_pastas"])) echo $_POST["Php_pastas"]; ?>" class="form-control" id="emailas" placeholder="E-mailas">
            </div>
        </div>

        <!--Slaptazodis-->
        <div class="form-group col-lg-4 col-lg-offset-4 form-inline tarpaiTarpLauku">
            <label for="slaptazodis1" class="col-sm-2 control-label">Slaptažodis:</label>
            <div class="col-sm-10">
                <input type="password" name="Php_slapt1" class="form-control" style="width: 237px;" id="slaptazodis1" placeholder="Slaptažodis">
                <input type="password" name="Php_slapt2"class="form-control" style="width: 237px;" id="slaptazodis2" placeholder="Slaptažodis">
            </div>
        </div>

        <!--Telefono numeris-->
        <div class="form-group col-lg-4 col-lg-offset-4 tarpaiTarpLauku">
            <label for="telnumeris" class="col-sm-2 control-label">Telefonas:</label>
            <div class="col-sm-10">
                <input type="text" name="Php_telefonas" value="<?php if(isset($_POST["Php_telefonas"])) echo $_POST["Php_telefonas"]; ?>" class="form-control" id="telnumeris" placeholder="Telefono numeris">
            </div>
        </div>


        <!--Gimimo data-->
        <div class="form-group col-lg-4 col-lg-offset-4 tarpaiTarpLauku">
            <label class="col-sm-2 control-label">Data:</label>
            <div class="col-sm-10">
                <input id="datepicker" type="text"  name="Php_data" value="<?php if(isset($_POST["Php_data"])) echo $_POST["Php_data"]; ?>" class="form-control datepicker" placeholder="Gimimo data">
            </div>
        </div>

        <!--Lytis-->
        <div class="form-group col-lg-4 col-lg-offset-4 ">
            <label class="col-sm-2 control-label">Lytis:</label>
            <div class ="col-sm-10">
                <div class="btn-group">
                    <button type="submit" name="php_lytis1"  value="Vyras" class="btn btn-default">Vyras</button>
                    <button type="submit" name="php_lytis2" value="Moteris" class="btn btn-default">Moteris</button>
                </div>
            </div>
        </div>

        <!--Mygtukas(Registrutis)-->
        <div class="col-lg-4 col-lg-offset-4 tarpaiTarpLauku kaireLygiuote">
            <button type="submit"  name="Php_registruoti" class="btn btn-primary">Registruotis</button>
        </div>

    </form>
    </body>
    </html>


<?php

if(isset($_POST["Php_registruoti"])) {

    $vardas=$_POST["Php_vardas"];
    $pavarde=$_POST["Php_pavarde"];
    $slapt1=$_POST["Php_slapt1"];
    $slapt2=$_POST["Php_slapt2"];
    $data=$_POST["Php_data"];
    $telefonas=$_POST["Php_telefonas"];
    $pastas=$_POST["Php_pastas"];

// Sitoje vietoje neateina pranesimas is buttonu, buvo tikrinta 100 kartu
if (isset($_POST["php_lytis1"]))  $lytis="Vyras";
    else if ((isset($_POST["php_lytis2"])))   $lytis="Moteris";
            else $lytis="NULL";

    require_once("Funkcijos.php");
    Ivesti_i_db($vardas, $pavarde, $slapt1, $slapt2, $data, $lytis, $telefonas, $pastas);
}

?>