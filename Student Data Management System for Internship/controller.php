<?php
include_once "./config.php";

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$type=$_POST['deptType'];


$sql="Insert into intern_details(name,email,phone,department_id) values('$name','$email','$phone','$type')";
//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
//    echo "Successfully entered!";
    header("Location: ./view.php");
 }
else{
     echo "Unsuccessful!!";
 }
// echo $name;
// echo $email;
// echo $phone;
// echo $type;

?>