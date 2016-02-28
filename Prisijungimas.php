

<!DOCTYPE html>


<?php
session_start();

if(isset($_POST["prisijungimo_mygtukas"]))

{

    require_once("Funkcijos.php");
    $salyga=Patikrinti_Ar_vartotojas_Egzistuoja($_POST["pastas"],$_POST["slaptazodis"]);

    if($salyga)
    {
        require_once("Funkcijos.php");
        $Vartotojo_ID=Gauti_Vartotojo_ID($_POST["pastas"],$_POST["slaptazodis"]);
        if(!isset($_SESSION['duomenu_pasintimas']))
        {
            $_SESSION['duomenu_pasintimas'] =$Vartotojo_ID ;
        }
        header("Location: Sveiki.php");
        exit;
    }



    else echo "<script>alert('Neteisingas el. paštas arba slaptažodis!')  </script> ";


}
if(isset($_POST["registracijos_mygtukas"])){

    header("Location: Registracija.php");
    exit;


}
?>

<html>
<head>

<meta charset="utf-8">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/bootstrap.min.js"></script>

</head>
<body class="bgSpalva">

<div class="navbar navbar-inverse navbar-fixed-bottom navbar-inner container-fluid"></div>
<div class="navbar navbar-inverse navbar-fixed-top navbar-inner container-fluid"></div>


<form class="text-center aukstis" method="post" >

    <div class="form-group col-lg-4 col-lg-offset-4">
        <label for="emailas">Elektroninio pašto adresas</label>
        <input type="email"  name="pastas" class="form-control" id="emailas" placeholder="E-mailas">
    </div>

    <div class="form-group col-lg-4 col-lg-offset-4">
        <label for="slaptazodis">Slaptažodis</label>
        <input type="password" name="slaptazodis" class="form-control" id="slaptazodis" placeholder="Slaptažodis">
    </div>

    <div class="col-lg-4 col-lg-offset-4">

        <button type="submit" name= "prisijungimo_mygtukas" class="btn btn-primary" >Prisijungti</button>
        <button type="submit" name= "registracijos_mygtukas"  class="btn btn-primary"  >Registruotis</button>


    </div>

</form>


</body>
</html>
