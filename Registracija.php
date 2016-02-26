<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.11.4/jquery-ui.js"></script>

    <script src="js/bootstrap.min.js"></script>


</head>
<body>
<form class="text-center aukstis" method="post">

    <!--Vardas-->
    <div class="form-group col-lg-4 col-lg-offset-4">
        <label for="vardas" class="col-sm-2 control-label">Vardas: </label>
        <div class="col-sm-10">
            <input type="text" name="Php_vardas" value="<?php if(isset($_POST['Php_vardas'])) echo $_POST['Php_vardas']; ?>" class="form-control" id="vardas" placeholder="Vardas">
        </div>
    </div>

    <!--Pavarde-->
    <div class="form-group col-lg-4 col-lg-offset-4 tarpaiTarpLauku">
        <label for="pavarde" class="col-sm-2 control-label">Pavardė: </label>
        <div class="col-sm-10">
            <input type="text" name="Php_pavarde" value="<?php if(isset($_POST['Php_pavarde'])) echo $_POST['Php_pavarde']; ?>" class="form-control" id="pavarde" placeholder="Pavardė">
        </div>
    </div>

    <!--Emailas-->
    <div class="form-group col-lg-4 col-lg-offset-4 tarpaiTarpLauku">
        <label for="emailas" class="col-sm-2 control-label">El-paštas:</label>
        <div class="col-sm-10">
            <input type="email" name="Php_pastas" value="<?php if(isset($_POST['Php_pastas'])) echo $_POST['Php_pastas']; ?>" class="form-control" id="emailas" placeholder="E-mailas">
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
            <input type="text" name="Php_telefonas" value="<?php if(isset($_POST['Php_telefonas'])) echo $_POST['Php_telefonas']; ?>" class="form-control" id="telnumeris" placeholder="Telefono numeris">
        </div>
    </div>



    <!--Gimimo data-->
    <div class="form-group col-lg-4 col-lg-offset-4 tarpaiTarpLauku">
        <label class="col-sm-2 control-label">Data:</label>
        <div class="col-sm-10">
            <input id="datepicker" type="text"  name="Php_data" value="<?php if(isset($_POST['Php_data'])) echo $_POST['Php_data']; ?>" class="form-control" placeholder="Gimimo data">
        </div>
    </div>

    <script>
        $( "#radioset" ).buttonset();
        $( "#datepicker" ).datepicker({
            inline: true
        });
    </script>

    <!--Lytis-->
    <div class="form-group col-lg-4 col-lg-offset-4 ">
        <label class="col-sm-2 control-label">Lytis:</label>
        <div class ="col-sm-10">
            <div class="btn-group">
                <button type="button" name="php_lytis_vyr" class="btn btn-default">Vyras</button>
                <button type="button" name="php_lytis_mot"class="btn btn-default">Moteris</button>
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

