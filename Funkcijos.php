<?php

function Ivesti_i_db($vardas, $pavarde, $slapt1, $slapt2, $data, $lytis, $telefonas, $pastas){

      if($slapt1==$slapt2){
      require_once("duomenu_bazes_kontroleris.php");
		$db_objektas = new DB_Kontroleris();
		$query = "INSERT INTO registracijos_forma (Vardas, Pavarde, Slaptazodis, Gimimo_diena, Lytis, Telefonas, E_mail) VALUES
		('" .$vardas  . "','" . $pavarde . "','" . md5($slapt1) . "','" . $data . "','" . $lytis . "','" . $telefonas . "','" . $pastas . "')";
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