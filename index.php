<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-paw"></i> shop </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#shop">shop</a>
        <a href="#services" onclick="popup()">services</a>
        <a href="#plan">plan</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="#" class="fas fa-shopping-cart"></a>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="login.php" method="post" class="login-form">
        <h3>sign in</h3>
        <input type="email" name="email" placeholder="enter your email" id="" class="box">
        <input type="password" name="pass" placeholder="enter your password" id="" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" name="submit" value="sign in" class="btn">
        <div class="links">
            <a href="#">forget password</a>
            <a href="reg.php">sign up</a>
        </div>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3> <span>hi</span> welcome to our pet shop </h3>
        <button class="btn" onclick="popup()">shop now</button>
    </div>
<script>function popup(){alert ("Please Log In")}</script>
    <img src="image/bottom_wave.png" class="wave" alt="">

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="image/about_img.png" alt="">
    </div>

    <div class="content">
        <h3>premium <span>pet food</span> manufacturer</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum sint, dolore perspiciatis iure consequuntur eligendi quaerat vitae shaikh anas.</p>
        <a href="" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- dog and cat food banner section starts -->

<div class="dog-food">

    <div class="image">
        <img src="image/dog_food.png" alt="">
    </div>

    <div class="content">
        <h3> <span>air dried</span> dog food </h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat iure illo, repudiandae rem porro sunt.</p>
        <div class="amount">$15.00 - $30.00</div>
        <a href="" onclick="popup()"> <img src="image/shop_now_dog.png" alt=""> </a>
        <script>function popup(){alert ("Please Log In")}</script>
    </div>

</div>

<div class="cat-food">

    <div class="content">
        <h3> <span>air dried</span> cat food </h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat iure illo, repudiandae rem porro sunt.</p>
        <div class="amount">$15.00 - $30.00</div>
        <a href="" onclick="popup()"> <img src="image/shop_now_cat.png" alt=""> </a>
        
    </div>

    <div class="image">
        <img src="image/cat_food.png" alt="">
    </div>

</div>

<!-- dog and cat food banner section ends -->

<!-- shop section starts  -->

<section class="shop" id="shop">

    <h1 class="heading"> our <span> products </span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="" onclick="popup()" class="fas fa-shopping-cart"></a>
                <a href="" onclick="popup()" class="fas fa-heart"></a>
                <a href="" onclick="popup()" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_01.jpg" alt="">
            </div>
            <div class="content">
                <h3>air-dried food</h3>
                <div class="amount"> $15.00 - $30.00 </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="" onclick="popup()" class="fas fa-shopping-cart"></a>
                <a href="" onclick="popup()" class="fas fa-heart"></a>
                <a href="" onclick="popup()" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_02.jpg" alt="">
            </div>
            <div class="content">
                <h3>air-dried food</h3>
                <div class="amount"> $15.00 - $30.00 </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="" onclick="popup()" class="fas fa-shopping-cart"></a>
                <a href="" onclick="popup()" class="fas fa-heart"></a>
                <a href="" onclick="popup()" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_03.jpg" alt="">
            </div>
            <div class="content">
                <h3>air-dried food</h3>
                <div class="amount"> $15.00 - $30.00 </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="" onclick="popup()" class="fas fa-shopping-cart"></a>
                <a href="" onclick="popup()" class="fas fa-heart"></a>
                <a href="" onclick="popup()" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_04.jpg" alt="">
            </div>
            <div class="content">
                <h3>air-dried food</h3>
                <div class="amount"> $15.00 - $30.00 </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="" onclick="popup()" class="fas fa-shopping-cart"></a>
                <a href="" onclick="popup()" class="fas fa-heart"></a>
                <a href="" onclick="popup()" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_05.jpg" alt="">
            </div>
            <div class="content">
                <h3>air-dried food</h3>
                <div class="amount"> $15.00 - $30.00 </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="" onclick="popup()" class="fas fa-shopping-cart"></a>
                <a href="" onclick="popup()" class="fas fa-heart"></a>
                <a href="" onclick="popup()" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_06.jpg" alt="">
            </div>
            <div class="content">
                <h3>air-dried food</h3>
                <div class="amount"> $15.00 - $30.00 </div>
            </div>
        </div>

    </div>

</section>

<!-- shop section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-dog"></i>
            <h3>dog boarding</h3>
            <a href="" onclick="popup()" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-cat"></i>
            <h3>cat boarding</h3>
            <a href="" onclick="popup()" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-bath"></i>
            <h3>spa & grooming</h3>
            <a href="" onclick="popup()" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-drumstick-bite"></i>
            <h3>healthy meal</h3>
            <a href="" onclick="popup()" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-baseball-ball"></i>
            <h3>activity exercise</h3>
            <a href="" onclick="popup()" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>health care</h3>
            <a href="" onclick="popup()" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- plan section starts  -->

<section class="plan" id="plan">

    <h1 class="heading"> choose a <span>plan</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 1 day </h3>
            <i class="fas fa-bicycle icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>$</span>50</div>
            <a href="" onclick="popup()" class="btn"> choose plan </a>
        </div>

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 10 days </h3>
            <i class="fas fa-motorcycle icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>$</span>350</div>
            <a href="" onclick="popup()" class="btn onclick= 'popup()'"  > choose plan </a>
        </div>

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 30 days </h3>
            <i class="fas fa-car-side icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>$</span>650</div>
            <a href="" onclick="popup()" class="btn"> choose plan </a>
        </div>

    </div>

</section>

<!-- plan section ends -->

<section class="contact" id="contact">

    <div class="image">
        <img src="image/contact_img.png" alt="">
    </div>

    <form action="">
        <h3>contact us</h3>
        <input type="text" placeholder="your name" class="box">
        <input type="email" placeholder="your email" class="box">
        <input type="tumber" placeholder="your number" class="box">
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" onclick="popup()" value="send message" class="btn">
    </form>

</section>

<section class="footer">

    <img src="image/top_wave.png" alt="">

    <div class="share">
        <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#" class="btn"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a>
    </div>

    <div class="credit"> created by <span> mr. web designer </span> | all rights reserved! </div>

</section>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>