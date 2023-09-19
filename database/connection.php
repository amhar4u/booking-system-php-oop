<?php
// Database credentials
$host = 'localhost';
$dbName = 'pronto';
$username = 'root';
$password = '';

// Define a Database class
class Database {
  private $host;
  private $dbName;
  private $username;
  private $password;
  private $pdo;

  public function __construct ($host, $dbName, $username, $password) {
    $this->host = $host;
    $this->dbName = $dbName;
    $this->username = $username;
    $this->password = $password;
  }

  public function connect() {
    $dsn = "mysql:host=$this->host;dbname=$this->dbName;charset=utf8mb4";
    $this->pdo = new PDO($dsn, $this->username, $this->password);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function insertDataBooking($name,$email,$contact,$package,$amount) {
    $stmt = $this->pdo->prepare("INSERT INTO booking (name,email,contact,package,amount) VALUES (:name, :email, :contact,:package,:amount)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':contact', $contact);
    $stmt->bindParam(':package', $package);
    $stmt->bindParam(':amount', $amount);


    try {
      $stmt->execute();
      header("location:../index.php");
      
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }

  public function insertDataReview($email, $subject, $service) {
    $stmt = $this->pdo->prepare("INSERT INTO review (email, subject, service) VALUES (:email, :subject, :service)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':service', $service);

    try {
      $stmt->execute();
      header("location:../index.php");
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $package = $_POST['package'];
    $amount=$_POST['amount'];
  
   
    $database = new Database($host, $dbName, $username, $password);
  
    $database->connect();
  
    $database->insertDataBooking($name,$email, $contact, $package,$amount);
  }

  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $service = $_POST['service'];

  
    $database = new Database($host, $dbName, $username, $password);

    $database->connect();

    $database->insertDataReview($email, $subject, $service);
  }

  ?>


