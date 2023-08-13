<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
   
     //Database Connection 
    $conn = new mysqli("localhost", "root", "", "mydatabase");
    if($conn->connect_error){
        die("Failed to connect : ".$conn->connect_error);
    }else{
        $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? ");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password']===$password){
                echo "<h2>Registration Successfully</h2>";
            }
        }
    }
?>