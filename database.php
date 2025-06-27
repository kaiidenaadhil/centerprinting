<?php
// Singleton to connect db.
class Database{
  // Hold the class instance.
  private static $instance = null;
  private $conn;
  
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $name = 'cp';
   
  // The db connection is established in the private constructor.
  private function __construct()
  {
    $this->conn = new PDO("mysql:host={$this->host};dbname={$this->name}", $this->user,$this->pass);
  }
  
  public static function getInstance()
  {
    if(!self::$instance)
    {
      self::$instance =  new self();
    }

    return self::$instance;
  }
  
  public function getConnection()
  {
    return $this->conn;
  }
}


$instance = Database::getInstance()->getConnection();
//insert operation
$sql = "insert into `words` (`word`) values (:word)";    
$query = $instance->prepare($sql);
$result = $query->execute(array(":word" => "Yahoo"));    
if($result){  echo "Insert Successfull.";} else echo "Fail";

?>