<?php

function Ivesti_i_db($vardas, $pavarde, $slapt1, $slapt2, $data, $lytis, $telefonas, $pastas)
{

	$message ="Sveiki čia kalba funkcija :Ivesti_ib! (testavimas)";
	if (isset($vardas) and isset($pavarde) and isset($slapt1) and isset($slapt2) and isset($lytis) and isset($telefonas) and isset($pastas))

	{

			require_once("duomenu_bazes_kontroleris.php");
			$db_objektas = new DB_Kontroleris();

			$Patikrinimo_Salyga = "SELECT * FROM registracijos_forma WHERE 	E_mail='$pastas'";
			$Tarpinis = $db_objektas->numRows($Patikrinimo_Salyga);

			if ($Tarpinis == 0) {
				$query = "INSERT INTO registracijos_forma (Vardas, Pavarde, Slaptazodis, Gimimo_diena, Lytis, Telefonas, E_mail) VALUES
		('" . $vardas . "','" . $pavarde . "','" . md5($slapt1) . "','" . $data . "','" . $lytis . "','" . $telefonas . "','" . $pastas . "')";
				$rezultatas = $db_objektas->insertQuery($query);
				if (!empty($rezultatas)) {
					$message = "Sėkmingai prisiregistravote!";
					unset($_POST);
				} else {
					$message = "Iškilo problemų, bandykite dar.";
					exit();
				}
			}
		else $message="Toks vartotojas jau yra!";

			}



	return $message;
}

function Patikrinti_Ar_vartotojas_Egzistuoja($pastas, $slaptazodis){
	$Ar_egzistuoja=false;

	require_once("duomenu_bazes_kontroleris.php");
	$db_objektas = new DB_Kontroleris();

	$Patikrinimo_Salyga ="SELECT * FROM registracijos_forma WHERE 	E_mail='$pastas' AND Slaptazodis='".md5($slaptazodis)."'";
	$Tarpinis = $db_objektas->numRows($Patikrinimo_Salyga);

	if($Tarpinis==1)
	{
		$Ar_egzistuoja=true;
	}

	else
	{
		$Ar_egzistuoja = false;
	}


	return $Ar_egzistuoja;
}


function Grazinti_Prisijungusio_Asmens_Duomenis($ID){
	require_once("duomenu_bazes_kontroleris.php");
	$db_objektas = new DB_Kontroleris();
	$uzklausa="SELECT * FROM registracijos_forma WHERE 	ID='$ID'";
	$Duomenys=$db_objektas->runQuery($uzklausa);

	return $Duomenys;
}


function Gauti_Vartotojo_ID($pastas, $slaptazodis)
{
	require_once("duomenu_bazes_kontroleris.php");
	$db_objektas = new DB_Kontroleris();
	$uzklausa="SELECT ID FROM registracijos_forma WHERE 	E_mail='$pastas' AND Slaptazodis='".md5($slaptazodis)."'";
	$ID=$db_objektas->runQuery($uzklausa);

	return $ID;
}
?>