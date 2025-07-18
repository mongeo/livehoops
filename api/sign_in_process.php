<?php
session_start(); //starts or resumes an existing session

print_r($_POST); //for debugging purposes, display the content of the $_POST array

include '../inc/dbConnection.php';

$conn = getDatabaseConnection("livehoops");

$username = $_POST['username'];
//$password = sha1($_POST['password']);
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE username = :username AND password = :password";

$namedParameters = array();
$namedParameters[':username'] = $username;
$namedParameters[':password'] = $password;


$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC); //we are expecting ONLY one record, so we use fetch instead of fetchAll

// print_r($record);
 
 if (empty($record)) {
     echo "Username or Password are incorrect!";
 }  else { 
    $_SESSION['username'] = $record['username'];
    header('location: ../dashboard.php'); //redirecting to a new file
}

?>