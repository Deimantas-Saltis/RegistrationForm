<?php

if(isset($_POST["Php_registruoti"]))
{

    //-------Duomenu gavimas-------
    $vardas = $_POST["Php_vardas"];
    $pavarde = $_POST["Php_pavarde"];
    $slapt1 = $_POST["Php_slapt1"];
    $slapt2 = $_POST["Php_slapt2"];
    $data = $_POST["Php_data"];
    $telefonas = $_POST["Php_telefonas"];
    $pastas = $_POST["Php_pastas"];
    if ((isset($_POST["lytis"])))
        $lytis = $_POST["lytis"];
    else $lytis = "NULL";
    //-----------------------------

    require_once("Funkcijos.php");
    // Tikrinama ar gaima irasyti i db
    $ar_galina_ivesti = Sutikrinti_Ivedamus_Duomenis_Pries_registrujant($vardas, $pavarde, $slapt1, $slapt2, $data, $lytis, $telefonas, $pastas);
    if ($ar_galina_ivesti) {
        // jei galima irasoma
        $pranesimas = Ivesti_i_db($vardas, $pavarde, $slapt1, $slapt2, $data, $lytis, $telefonas, $pastas);
        echo "<script>alert('$pranesimas')  </script> ";
        if ($pranesimas == "Sėkmingai prisiregistravote!") {
            header("Location: Prisijungimas.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <style>
        .error {color: #FF0000;}
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/datepicker.css"/>
    <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/validator.js."></script>

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



<form class="text-center aukstis" method="post" data-toggle="validator" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <!--Vardas-->
    <div class="form-group col-lg-4 col-lg-offset-4">
        <label for="vardas" class="col-sm-2 control-label">Vardas: </label>
        <div class="col-sm-10">
            <input type="text" pattern="^[a-zA-Z ]*$" name="Php_vardas" class="form-control" id="vardas" placeholder="Vardas" data-error="Leidžiamos tik raidės" required>
            <span class="help-block with-errors"></span>
        </div>
    </div>

    <!--Pavarde-->
    <div class="form-group col-lg-4 col-lg-offset-4 tarpaiTarpLauku">
        <label for="pavarde" class="col-sm-2 control-label">Pavardė: </label>
        <div class="col-sm-10">
            <input type="text" pattern="^[a-zA-Z ]*$" name="Php_pavarde"  class="form-control" id="pavarde" placeholder="Pavardė" data-error="Leidžiamos tik raidės" required>
            <span class="help-block with-errors"></span>
        </div>
    </div>

    <!--Emailas-->
    <div class="form-group col-lg-4 col-lg-offset-4 tarpaiTarpLauku">
        <label for="emailas" class="col-sm-2 control-label">El-paštas:</label>
        <div class="col-sm-10">
            <input type="email" name="Php_pastas" class="form-control" id="emailas" placeholder="E-mailas" data-error="Netinkamas e-mail formatas" required>
            <div class="help-block with-errors"></div>
        </div>
    </div>

    <!--Slaptazodis-->
    <div class="form-group col-lg-4 col-lg-offset-4 form-inline tarpaiTarpLauku">
        <label for="slaptazodis1" class="col-sm-2 control-label">Slaptažodis:</label>
        <div class="col-sm-10">
            <input type="password" data-minlength="5" name="Php_slapt1" class="form-control" style="width: 237px;" data-error="Slaptažodis per trumpas" id="slaptazodis1" placeholder="Slaptažodis" required>
            <input type="password" name="Php_slapt2" class="form-control" style="width: 237px;" data-match="#slaptazodis1" data-match-error="Slaptažodžiai nesutampa" id="slaptazodis2" placeholder="Slaptažodis" required>
            <span class="help-block">Mažiausiai 5 simboliai</span>
            <div class="help-block with-errors"></div>
        </div>
    </div>

    <!--Telefono numeris-->
    <div class="form-group col-lg-4 col-lg-offset-4 tarpaiTarpLauku">
        <label for="telnumeris" class="col-sm-2 control-label">Telefonas:</label>
        <div class="col-sm-10">
            <input type="text" data-minlength="9" pattern="[0-9]+" name="Php_telefonas" class="form-control" id="telnumeris" placeholder="Telefono numeris" required>
            <span class="help-block">9 skaitmenys</span>
        </div>
    </div>


    <!--Gimimo data-->
    <div class="form-group col-lg-4 col-lg-offset-4 tarpaiTarpLauku">
        <label class="col-sm-2 control-label">Data:</label>
        <div class="col-sm-10">
            <input id="datepicker" type="text"  name="Php_data" class="form-control datepicker" placeholder="Gimimo data" required>
            <div class="help-block with-errors"></div>
        </div>
    </div>


    <!--Lytis-->
    <div class="form-group col-lg-4 col-lg-offset-4 ">
        <label class="col-sm-2 control-label">Lytis:</label>
        <div class ="col-sm-10">
            <div class="btn-group"  data-toggle="buttons">
                <label class="btn btn-default">
                    <input name="lytis" value="Vyras" type="radio" required>Vyras
                </label>
                <label class="btn btn-default">
                    <input name="lytis" value="Moteris" type="radio" required>Moteris
                </label>
            </div>
            <div class="help-block with-errors"></div>
        </div>
    </div>


    <!--Mygtukas(Registrutis)-->
    <div class="col-lg-4 col-lg-offset-4 tarpaiTarpLauku kaireLygiuote">
        <button type="submit"  name="Php_registruoti" class="btn btn-primary"> Registruotis</button>
    </div>

</form>
</body>
</html>