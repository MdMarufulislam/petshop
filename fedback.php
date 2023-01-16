
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/cart.css">

</head>
<body>
<div class="container"></div>
<header class="header">

   <div class="flex">

   <a href="home.php" class="logo"> <i class="fas fa-paw"></i> shop </a>

      <nav class="navbar">
        
         <a href="products.php">view products</a>
         <a href="adminpanel.php">Orders</a>
         <a href="admin_login.php">Add Product</a>
         <a href="fedback.php">Comments</a>
         
      </nav>


   </div>

</header>
<div class="container">
<?php
    $database= mysqli_connect('localhost','root','','petshop');

    $select_data="SELECT * FROM `fedback`";
    $querry_set=mysqli_query($database,$select_data);

    $count=mysqli_num_rows($querry_set);
    if($count>0){    
 ?>

<section class="shopping-cart">

   <h1 class="heading">Feedbacks</h1>

   <table class="table table-bordered table-dark">

      <thead>
         <th  scope="col">Name</th>
         <th  scope="col">Email</th>
         <th  scope="col">Number</th>
         
         <th  scope="col">Message</th>
      </thead>

      <tbody>
      <?php
        while($row=mysqli_fetch_assoc($querry_set)){
          $name=$row['name'];
          $number=$row['number'];
          $email=$row['email'];
          $msg=$row['msg'];
?>

<tr>
      <td><?php echo $name?></td>
      <td><?php echo $email?></td>
      <td><?php echo $number?></td>
      <td><?php echo $msg?></td>
    </tr>

<?php

        }
    ?>
      </tbody>
   </table>
   </div>
<!-- custom js file link  -->
<script src="js/cart.js"></script>
</body>
</html>
<?php
  
    }else{
      echo "data not found";
    }
    ?>


