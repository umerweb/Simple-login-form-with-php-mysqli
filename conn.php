<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','register');

if($conn->connect_error){
    die('connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstname,lastname,email,gender,password)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname,$lastname,$email,$gender,$password);
    $stmt->execute();
    echo "Bro you did it";
    $stmt->close();
    $conn->close();
}

?>