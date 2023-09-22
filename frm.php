<?php
$servername = "localhost";
$username = "insert";
$password = "Syspa123";
$dbname = "emp_info";

$fname =  $_REQUEST['fname'];
$lname =  $_REQUEST['lname'];
$email =  $_REQUEST['email'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO emp (fname, lname, email)
VALUES ('$fname', '$lname', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
$timestamp = time();
$myfile = fopen("log.txt", "a") or die("Unable to open file!");
$txt = "Data insert is success for $email at $timestamp \n";
fwrite($myfile, $txt);
fclose($myfile);
?>