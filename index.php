<?php
if(isset($_POST['name'])){
$SERVER="localhost";
$username="root";
$password= "";

$con=mysqli_connect($SERVER,$username,$password);

if(!$con){
    die("Connecting to this database failed due to " .mysqli_connect_error());
}

// echo " succesfully connected to the db";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip1`(`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
    VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    if($con->query($sql) == true)
    {
        echo "Successfully inserted";
    }
    else
    {
        echo "Error : $sql <br> $con->error";
    }
    $con->close();
}

?>