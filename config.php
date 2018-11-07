<?php
class Config {
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "db_kebonsirih";
  private $conn;

  	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->database);
		if (!$conn) {
			die("Gagal terhubung dengan database: " . mysqli_connect_error());
		}
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}

	function cekLogin() {
		
		//jika session username belum dibuat, atau session username kosong
		if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
			//redirect ke halaman login
			header('location:login.php');
		}
	}
}

?>