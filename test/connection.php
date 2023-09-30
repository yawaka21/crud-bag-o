

<?php


$host = "localhost";
$username = "root";
$password = "";
$database = "prelim_db";
// Create connection
$conn = new mysqli($host, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Code ni sir

// $newconnectionm = new Connection();

// Class Connection {

//   private $host = "mysql:host=localhost;dbname=prelim_db";
//   private $username = "root";
//   private $password = "";
//   private $database = "prelim_db";

//   private $options = array(PDO::ATTER_ERRMODE => 
//   PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);

//   protected $con;

//   public function openConnection()
//   {
//     try 
//     {
//       $this->con = new PDO($this->host,
//       $this->username,$this->password,$this->options);
//       return $this->con;
//     }
//   }
//   catch (PDOException $e)
//   {
//     echo "Error".$e->getMessage();
//   }
// }

// public function closeConnection()
// {
//   $this ->con = null;
// }
 //Code gpt
// class Connection {

//   private $host = "mysql:host=localhost;dbname=prelim_db";
//   private $username = "root";
//   private $password = "";
//   private $database = "prelim_db";

//   private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);

//   protected $conn;

//   public function openConnection()
//   {
//     try 
//     {
//       $this->con = new PDO($this->host, $this->username, $this->password, $this->options);
//       return $this->conn;

//     } // <- Moved this closing brace to the correct location
//     catch (PDOException $e)
//     {
//       echo "Error".$e->getMessage();
//     }
//   }

//   public function closeConnection()
//   {
//     $this->conn = null;
//   }
// }

?>
