
<?php
 $database= mysqli_connect('localhost','root','','petshop');


 if(isset($_REQUEST["submit"])){

 $name= $_REQUEST["name"];
 $email = $_REQUEST["email"];
 $number= $_REQUEST["number"];
 $msg= $_REQUEST["msg"];


 $select="SELECT * FROM `fedback`";
 $db_connect=mysqli_query($database,$select);
 $count= mysqli_num_rows($db_connect);
 if($count){
   
      
   $insert = "INSERT INTO `fedback`(`name`, `email`, `number`, `msg`) VALUES ('$name','$email','$number','$msg')";
$query = mysqli_query($database,$insert);
if ($query){
   
    header("location:home.php");


 }
}
 }



?>