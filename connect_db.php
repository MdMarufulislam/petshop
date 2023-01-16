<?php
 $database= mysqli_connect('localhost','root','','petshop');


 if(isset($_REQUEST["submit"])){

$email= $_REQUEST["email"];
 $user_name = $_REQUEST["user_name"];
 $pass= $_REQUEST["password"];


 $select="SELECT * FROM `reg` WHERE user_name='$user_name' OR email='$email'";
 $db_connect=mysqli_query($database,$select);
 $count= mysqli_num_rows($db_connect);
 if($count>0){
   
   echo $error= "already inserted";

 } else{
      
   $insert = "INSERT INTO `reg`(`user_name`, `email`, `password`) VALUES ('$user_name','$email','$pass')";
$query = mysqli_query($database,$insert);
if ($query){
   
    header("location:index.php");
    

 }
}
 }



?>