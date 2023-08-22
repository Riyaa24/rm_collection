<?php

$conn=mysqli_connect(
    'localhost',
    'root', '',
    'rm_collection'
);
if($conn){
    echo "Login Successfull";
}else{
    echo "Not Connected";
}

?>
