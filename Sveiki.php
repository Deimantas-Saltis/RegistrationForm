<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Edvinas
 * Date: 2/28/2016
 * Time: 3:25 PM
 */

echo "Sveiki! ";

if(!isset($_SESSION['duomenu_pasintimas']))
{
    header("location: Prisijungimas.php");
}
else
{
  $VartotojoID = $_SESSION['duomenu_pasintimas'][0]['ID'];
    session_destroy();
    require_once("Funkcijos.php");
    $VartotojoDuomenys = Grazinti_Prisijungusio_Asmens_Duomenis($VartotojoID);






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

<form class="text-center aukstis">
    <table class = "table"  >
        <thead>
        <tr class="active">
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Slaptažodis</th>
            <th>Gimimo metai</th>
            <th>Lytis</th>
            <th>Telefonas</th>
            <th>El. paštas</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once("Funkcijos.php");
        $duomenys = Gauti_Vartotojo_Duomenus_pagal_ID($VartotojoID);
        while ($row = mysql_fetch_assoc($duomenys)) {
            ?>
            <?php echo"Sveiki,".$row['Vardas'] ." " .$row['Pavarde'].", jūsų duomenys pateikti lentelėje žemiau:"?>
            <tr>
                <td><?php echo $row['Vardas']?></td>
                <td><?php echo $row['Pavarde']?></td>
                <td><?php echo $row['Slaptazodis']?></td>
                <td><?php echo $row['Gimimo_diena']?></td>
                <td><?php echo $row['Lytis']?></td>
                <td><?php echo $row['Telefonas']?></td>
                <td><?php echo $row['E_mail']?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</form>
</body>
</html>