<!DOCTYPE html>
<html lang="lt">
<head>
	<?php



	function Duomenu_sutikrinimas($vartotojo_vardas,$vartotojo_pavarde,$vartotojo_elpastas,$vartotojo_slaptazodis1,	$vartotojo_slaptazodis2,$vartotojo_telefonas, $vartotojo_gimimoData,$vyras_status,$moteris_status)
	{

		if($vartotojo_vardas=='' or $vartotojo_vardas=='Vardas')
		{
			echo "<script>alert('Prašome įvesti vartotojo vardą')</script>";
			exit();
		}
		if($vartotojo_pavarde=='' or $vartotojo_pavarde=='Pavardė')
		{
			echo "<script>alert('Prašome įvesti vartotojo pavardę')</script>";
			exit();
		}
		if($vartotojo_elpastas=='' or $vartotojo_elpastas=='e-mail@stud.vgtu.lt')
		{
			echo "<script>alert('Prašome įvesti vartotojo elektroninį paštą')</script>";
			exit();
		}
		if( $vartotojo_slaptazodis1=='' or $vartotojo_slaptazodis1=='slaptazodis' ) {

			echo "<script>alert('Prašome įvesti slaptažodį')</script>";
			exit();
		}

		if(  strlen($vartotojo_slaptazodis1)<5 ) {

			echo "<script>alert('Slaptažodis per trumpas, min 5 simboliai')</script>";
			exit();
		}

		if(($vartotojo_slaptazodis2 != $vartotojo_slaptazodis1)) {
			echo "<script>alert('Slaptažodžiai nesutampa!')</script>";

			exit();
		}



		if(!is_numeric($vartotojo_telefonas) or strlen($vartotojo_telefonas)!=9)
		{
			echo "<script>alert('Prašome įvesti taisyklingą telefono numerį')</script>";
			exit();
		}
		if($vyras_status==false &&  $moteris_status ==false){

			echo "<script>alert('Pasirikite lytį!')</script>";
			exit();
		}

		if ($vartotojo_gimimoData=='Gimimo data')
		{
			echo "<script>alert('Prašome įvesti gimimo datą')</script>";
			exit();
		}

	}




	function Duomenu_siuntimas_i_duombaze($vartotojo_vardas,$vartotojo_pavarde,$vartotojo_elpastas,$vartotojo_slaptazodis1,	$vartotojo_slaptazodis2,$vartotojo_telefonas, $vartotojo_gimimoData,$lytis ){



//----------------------------------



//ŠITOJE VIETOJE REIKIA PARAŠYTI PRISIJUNGIMĄ PRIE DUOMENŲ BAZĖS
// Į DUOMBAZĘ REIKIA SIŲSTI ŠIOS FUNKCIJOS PARAMETRUS, TIKRINIMO AR SIUNČIAMI GERI DUOMENYS JAU NEREIKIA NES AŠ ESU TAI PADARĘS KITOJE FUUNKCIJOJE
// BEST REGARDS, EDVINAS :*

//-------------------------------------


		echo "<script>alert('Duomenys sėkmingai patalpinti į duoemnų bazę :)')</script>";
	}

	?>


	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet">
<script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
<script src="jquery-ui-1.11.4/jquery-ui.js"></script>

</head>
<body>

<div class="main">
	<div class="social-icons">
		<div class="clear"> </div>	
      </div>

		<form method='post' action='Registracija.php'>
		   <div class="vardas">
			   <div class="col_1_of_2 span_1_of_2">	<input type="text" class="text"  value= "<?php if(isset($_POST['php_vardas'])) echo  $_POST[php_vardas]; else print 'Vardas';?> " name ='php_vardas' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Vardas';}"></div>
			   <div class="col_1_of_2 span_1_of_2">	<input type="text" class="text" value="<?php if(isset($_POST['php_pavarde'])) echo  $_POST[php_pavarde]; else print 'Pavardė';?> " name ='php_pavarde'onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pavardė';}"></div>
                <div class="clear"> </div>
		   </div>
		   
		   <div class="elpastui">
			   <input type="text" class="text" value="<?php if(isset($_POST['php_pastas'])) echo  $_POST[php_pastas]; else print "e-mail@stud.vgtu.lt";?> "  name ='php_pastas' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'e-mail@stud.vgtu.lt';}">
		   </div>
		   
		   <div class="slaptazodis">
			   <div class="col_1_of_2 span_1_of_2">	<input type="password" class="text" value="<?php if(isset($_POST['php_passsword1'])) echo  $_POST[php_passsword1]; else print "slaptazodis";?>" name ='php_password1' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"></div>
			   <div class="col_1_of_2 span_1_of_2">	<input type="password" class="text" value="<?php if(isset($_POST['php_passsword2'])) echo  $_POST[php_passsword2]; else print "slaptazodis";?>" name ='php_password2' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"></div>
				<div class="clear"> </div>
		   </div>
		   
		    <div class="elpastui">
				<input type="text" class="text" value="<?php if(isset($_POST['php_telefonas'])) echo  $_POST[php_telefonas]; else print 'Telefono numeris (86XXXXXXX)';?>"  name ='php_telefonas' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telefono numeris (86XXXXXXX)';}">
		   </div>

			<div style="margin-top: 1em;">
				<div id="radioset" class="tarpai">
					<input type="radio" id="radio1" name="radio" value ="Vyras">
					<label for="radio1">Vyras</label>

					<input type="radio" id="radio2" name="radio" value ="Moteris">
					<label for="radio2">Moteris</label>
				</div>
			</div>

			<div class="gdata">
			<input id="datepicker" type="text" size="63">
			</div>

				<br><br>
			<input type="submit"  name='php_submitas' onclick="myFunction()" value="Registruotis"  >
			<div class="clear"> </div>

			<script>
				$( "#radioset" ).buttonset();
				$( "#datepicker" ).datepicker({
					inline: true
				});
			</script>

		</form>
		</div>
</body>
</html>


<?php
$v_status = false;
$m_status = false;

if(isset($_POST['php_submitas']))
{


	$vartotojo_vardas = $_POST['php_vardas'];

	$vartotojo_pavarde = $_POST['php_pavarde'];

	$vartotojo_elpastas = $_POST['php_pastas'];

	$vartotojo_slaptazodis1 = $_POST['php_password1'];

	$vartotojo_slaptazodis2 = $_POST['php_password2'];

	$vartotojo_telefonas = $_POST['php_telefonas'];

	$vartotojo_lytis = $_POST['radio'];

	$vartotojo_gimimoData =  $_POST['php_data'];





// UŽDEDAMOS LYIES VELIAVELĖS

	if ($vartotojo_lytis == 'Vyras') {

		$v_status = true;
		$m_status = false;

	}
	else if ($vartotojo_lytis == 'moteris') {

		$m_status = true;
		$v_status = false;

	}





	Duomenu_sutikrinimas($vartotojo_vardas,$vartotojo_pavarde,$vartotojo_elpastas,$vartotojo_slaptazodis1,	$vartotojo_slaptazodis2,$vartotojo_telefonas, $vartotojo_gimimoData, $v_status,$m_status);
	Duomenu_siuntimas_i_duombaze($vartotojo_vardas,$vartotojo_pavarde,$vartotojo_elpastas,$vartotojo_slaptazodis1,	$vartotojo_slaptazodis2,$vartotojo_telefonas, $vartotojo_gimimoData, $vartotojo_lytis);




}

?>