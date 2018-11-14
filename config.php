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

    public function getMenuDetails($id) {
        $id = mysqli_real_escape_string($this->conn, $id);
        $query = "SELECT *  FROM `menu` WHERE `id` = '$id'";
        if (!$result = mysqli_query($this->conn, $query)) {
            exit(mysqli_error($this->conn));
        }
        $data = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data['id'] = $row['id'];
                $data['nama'] = $row['nama'];
                $data['harga'] = $row['harga'];
                $data['quantity'] = 1;
            }
        }
 
        return $data;
    }

    public function addToCart($id) {
        $menu = $this->getMenuDetails($id);
 
        $isFound = false;
        $i = 0;
 
        if (!isset($_SESSION['menu_cart']) || count($_SESSION['menu_cart']) < 1)
        {
            $_SESSION['menu_cart'] = array(0 => $menu);
        } else {
 
            foreach ($_SESSION['menu_cart'] as $item) {
                $i++;
                foreach ($item as $key => $value) {
                    if ($key == "id" && $value == $id) {
                        array_splice($_SESSION['menu_cart'], $i - 1, 1, array([
                            'id' => $item['id'],
                            'nama' => $item['nama'],
                            'harga' => $item['harga'],
                            'quantity' => $item['quantity'],
                        ]));
                        $isFound = true;
                    }
                }
 
            }
            if ($isFound == false) {
                array_push($_SESSION['menu_cart'], $menu);
            }
        }    
        
    }
 
    public function hapusMenu($id) {
        unset($_SESSION['menu_cart'][$id - 1]);
    }
}

?>