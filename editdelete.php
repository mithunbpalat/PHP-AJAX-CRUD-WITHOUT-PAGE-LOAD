<?php 
$servername = "localhost:3308";
$usrname   = "root";
$pwd = "";
$db = "interview";
$conn= mysqli_connect($servername, $usrname, $pwd, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{

    $sql = "SELECT * FROM employee where email= $_POST[email] ";
    $result = $conn->query($sql);
    
    }

$conn->close();
?>

?>
<!DOCTYPE HTML>
<html>  
<body>
<form>
Search by E-mail: <input type="text" name="searchbyemail"><input type="Submit" value="Search"><br>
</form>

<button>Delete</button>

</body>
</html>
