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

    echo"JUSU INFORMACIJA: \n";
    print_r($VartotojoDuomenys);






}
?>
