
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 if ( !empty($_POST) ) {
    $fullname= $_POST['name'];
    $age= $_POST['age'];
    $phone= $_POST['phone'];
    $location=$_POST['location'];
    $sql = "INSERT INTO `person` (name, age, location,phone) VALUES ('$fullname','$age','$location','$phone')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
 }

?>



