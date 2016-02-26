<?php

function Ivesti_i_db($vardas, $pavarde, $slapt1, $slapt2, $data, $lytis, $telefonas, $pastas){

      if($slapt2==$slapt2){
      require_once("duomenu_bazes_kontroleris.php");
		$db_objektas = new DB_Kontroleris();
		$query = "INSERT INTO registered_users (Vardas, Pavardė, Slaptažodis, Gimimo_diena, Lytis, Telefonas, E_mail) VALUES
		('" . $_POST[$vardas] . "', '" . $_POST[$pavarde] . "', '" . md5($_POST[$slapt1]) . "', '" . $_POST[$data] . "' '" . $_POST[$lytis] . "', '" . $_POST[$telefonas] . "', '" . $_POST[$pastas] . "')";
		$rezultatas = $db_objektas->insertQuery($query);
		if(!empty($rezultatas)) {
			$message = "Sėkmingai prisiregistravote!";
			unset($_POST);
		} else {
			$message = "Iškilo problemų, bandykite dar.";
		}
     }

     else exit();
}
?>