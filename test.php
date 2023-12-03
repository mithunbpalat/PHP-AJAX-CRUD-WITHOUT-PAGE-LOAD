
<?php
$servername = "localhost:3308";
$usrname   = "root";
$pwd = "";
$db = "interview";

// connect to the database
$conn= mysqli_connect($servername, $usrname, $pwd, $db);

// Create database


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
    $sql = "INSERT INTO employee (name, email, mobile) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[mobile]')";
    mysqli_query($conn, $sql);
    echo "Successfully Saved Data <br>";

    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<br> Name: " . $row["Name"]. " <br> Email: " . $row["Email"]. "<br> Mobile" . $row["Mobile"].  "<br><br>";
        echo "<button ><a href='editdelete.php'> Edit/Delete</a> <button>";
        }
    } else {
        echo "0 results";
    }
    }

$conn->close();
?>


