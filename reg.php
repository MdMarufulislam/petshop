
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/reg.css">
    
</head>
<body>

    <div class="container">
        <div class="header">
            <h2>Create Account</h2>
        </div>
       
        <form class="form" action="connect_db.php" method="post">
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" placeholder="Enter Your UserName" name="user_name" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Email</label>
                
                <input type="email" placeholder="Enter Your Email" name="email" id="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password</label>
                <input type="password" placeholder="Enter Your Password" name="password" id="password"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Again Password</label>
                <input type="password" placeholder="Enter Again Password" id="password2"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <input type="submit" id="submit" name="submit">
        </form>
    </div>    
    <script src="js/reg.js"></script>
</body>
</html>