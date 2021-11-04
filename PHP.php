<?php
include_once './core/stalker_configuration.core.php';
include_once './core/stalker_database.core.php';
include("function.php");
?>
<?php
class UsersData
{
  function signup(){
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $check = false;
              $fname = test_input($_POST["fname"]);
              if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
                  $check = true;
                echo "Only letters allowed";
                exit;
              }
              $lname = test_input($_POST["lname"]);
              if (!preg_match("/^[a-zA-Z]*$/",$lname)) {
                  $check = true;
                echo "Only letters Allowed";
                exit;
              }
              $email = test_input($_POST["email"]);
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $check = true;
                echo "Invalid email format";
                exit;
              }
              $pass = test_input($_POST["pass"]);
              if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!$])[a-zA-Z0-9!$ ]{8,20}$/",$pass)) {
                  $check = true;
                echo "Your password must have capital letter and Number and special character ! , $";
                exit;
              }
              $day = test_input($_POST["day"]);
              $month = test_input($_POST["month"]);
              $year = test_input($_POST["year"]);
              $currentYear = date("Y");
              if ($currentYear - $year < 18 ){
                  $check = true;
                echo "Your Age must be over 18";
                exit;
              }
              if (empty($_POST["gender"])) {
                  $check = true;
                echo "Gender is required";
                exit;
              }
              if(!$check){
                $gender = $_POST["gender"];
                $date = $year. "/" . $month . "/" . $day;
              $this->insertDB($fname ,$lname,$email,$pass,$gender,$date);
            }
          }
  }
  function insertDB($fname ,$lname, $email , $pass ,$gender,$date){
    try {
        $db = Stalker_Database::instance();
      $enc = sha1($pass);
      $sql = "INSERT INTO Branches_Info (firstname,lastname, email,pass ,gender ,date)
      VALUES ( '$fname','$lname' , '$email' , '$enc' ,'$gender','$date')";
      // use exec() because no results are returned
      $db->execute($sql);
      echo "Your Account has been created";
    }
    catch(PDOException $e) {
      echo  $e->getMessage();
    }
    $db = null;
  }
  function login(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {
        $check = false;
        $user = test_input($_POST["User"]);
        $pass = test_input($_POST["Pass"]);
        if (!filter_var($user, FILTER_VALIDATE_EMAIL)) {
          $check = true;
          echo "err1";
          exit;
        }
        if (empty($pass)) {
          echo "err2";
          $check = true;
          exit;
        }
        if(!$check) {
          $enc = sha1($pass);
          try {
            $db = Stalker_Database::instance();
            $query = "SELECT * FROM Branches_Info WHERE email =? AND pass =?";
            $stmt = $db->execute($query,array($user,$enc));
            $count = $stmt->rowCount();
            $row   = $stmt->fetch(PDO::FETCH_ASSOC);
            if($count == 1 && !empty($row)) {
              /******************** Your code ***********************/
              session_start(); 
              $_SESSION['id']   = $row['id'];
              $_SESSION['firstname'] = $row['firstname'];
              $_SESSION['lastname'] = $row['lastname'];
              // echo $_SESSION['firstname'];
              echo "http://localhost/facebook/loggedin";
            } 
            else {
              echo "invalid";
            }
          }
          catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }        
        }
      }
    else {
      header('http://localhost/facebook');
    }
  }
  function logout(){
    session_start();
    $_SESSION['id'] = "";
    $_SESSION['firstname'] = "";
    $_SESSION['lastname'] = "";
    if(empty($_SESSION['id'])) echo "http://localhost/facebook";
    //   echo "http://localhost/facebook/loggedin";
    // if(empty($_SESSION['id'])) header("http://localhost/facebook");
  }
}
?>
