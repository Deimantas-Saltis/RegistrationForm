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
?>