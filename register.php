<?php
//Get the data from the client side HTML form
$fName = $_POST['fName']; 
$lName = $_POST['lastName']);
$eMail = $_POST['eMail']);
$uName = $_POST['username']);
$pw = $_POST['password']);
//GLOBAL VARIABLES
$conID;
//Functions
 function openDatabase(&$conID){ //to create a handle $conID for the database
    $conID = new mysqli("localhost","root","","acm");

    if ($conID -> connect_errno) {
      echo "Failed to connect to MySQL: " . $conID -> connect_error;
      exit();
    }
 }
function write($conID,$fName, $lName, $eMail, $uName, $pw)
$sql="INSERT INTO userinfo (FirstName, LastName, Age) VALUES ('$firstname', '$lastname', '$age')";

if (!$mysqli -> query($sql)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);
}
//MAIN
 openDatabase($conID);
if (write($conID,$fName, $lName, $eMail, $uName, $pw)) {
 echo "<h1> Your information is stored successfully </h1>";
}
$conID->close();
*/
?>