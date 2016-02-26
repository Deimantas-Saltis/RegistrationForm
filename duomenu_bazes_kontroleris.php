<?php

error_reporting(E_ALL ^ E_DEPRECATED);
class DB_Kontroleris {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "registracijos_forma";

	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}

	function connectDB() {
		$conn = mysql_connect($this->host,$this->user,$this->password, $this->database);
		mysql_set_charset('utf8', $conn);
		return $conn;
	}

	function selectDB($conn) {
		mysql_select_db($this->database,$conn) or die(mysql_error());
	}

	function runQuery($query) {
		$result = mysql_query($query);
		while($row=mysql_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}

	function numRows($query) {
		$result  = mysql_query($query);
		$rowcount = mysql_num_rows($result);
		return $rowcount;
	}

	function updateQuery($query) {
		$result = mysql_query($query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}

	function insertQuery($query) {
		$result = mysql_query($query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}

	function deleteQuery($query) {
		$result = mysql_query($query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}
}
?>