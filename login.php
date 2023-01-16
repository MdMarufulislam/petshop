<?php
$database= mysqli_connect('localhost','root','','petshop');
if(isset($_REQUEST["submit"])){
  $email=$_REQUEST["email"];
 $pass=$_REQUEST["pass"];

if(!empty($email) && !empty($pass)){

    $query="SELECT * FROM `reg` WHERE email='$email' limit 1";
    $result=mysqli_query($database,$query);
    if($result){
        if($result && mysqli_num_rows($result)>0){
            $user_data=mysqli_fetch_assoc($result);
            if($user_data["password"]===$pass){

                header("location:home.php");
            }
        }
        else
{
    echo "wrong username or password!";
}
    }

    
}
}
?>

