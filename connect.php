<?php
// require 'kon.php';
$email = $_POST['email'];
$password = $_POST['psw'];

// $servername = "localhost";
// $database = "register";
// $username = "root";
// $password = "";

$conn = mysqli_connect('localhost', 'root', "", "register");

// $conn = new mysqli('localhost','root','','register');

//     $conn = new mysqli('localhost','root','','register');
//     if($conn->connect_error){
//         die('Connection Failed: '. $conn->connect_error);
//     }

//         $stmt = $conn->prepare("Insert into registration(email, psw) values(?, ?)");
//         $stmt->bind_param("ss",$email, $password);
//         $stmt->execute();
//         /* echo $execval; */
//         echo "Registration Completed";
//         $stmt->close();
//         $conn->close();

// $conn = new mysqli('localhost', 'root', '', 'register');
// if ($conn->connect_error) {
//     die('Connection Failed : ' . $conn->connect_error);
// } else {
//     $stmt = $conn->prepare("Insert into registration(email, psw) values(?,?)");
//     $stmt->bind_param("ss", $email, $password);
//     $stmt->execute();
//     echo "Registration Successfully!!!";
//     $stmt->close();
//     $conn->close();
// }

$query_sql = "INSERT INTO registration (email,password) VALUES ('$email','$password')";

if (mysqli_query($conn, $query_sql)){
    echo "YEY";
}else {
    echo "Gag : " . mysqli_error($conn);
}