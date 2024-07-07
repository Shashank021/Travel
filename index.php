<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js" charset="utf-8"></script>
</head>
<body>

<!-- header section start-->
<section class="header">
    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
        <a href="home2.php">home</a>
        <a href="">about</a>
        <a href="">package</a>
        <a href="">pricing</a>
        <a href="">book</a>
        </nav>

    <div id="menu-btn" class="fas fa-bars"></div>



</section>
<!-- header section end --> 

<!-- LOGIN section starts --> 
<section class=login-section>
   <div class="container">
    <div class="login-form">
        <!-- <h1 style="color:purple; font-size:15px;margin-left:60px;">Login</h1> -->
        <form action="home.php" method="POST"><!-- method="POST" -->
			<div class="label">
				<input type="text" class="box" name="username"	placeholder="Enter your username" required="required"> 
			</div>
			<div class="label">
				<input type="password" class="box" name="password" placeholder="Enter your password" required="required" id="myInput">
                <br><br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="checkbox" onclick="myFunction()">Show Password
                <script>
                    function myFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                            } else {
                                x.type = "password";
                                }
                        }</script>
			</div><br><br>
			<button type="submit" class="btn">Signin</button>
			
		</form>
        <!-- <input type="text" placeholder="name" class="box">
        <input type="password" placeholder="password" class="box">
        <a href="home.php"><button type="button" name="button">Login</button></a> -->
    </div>
    <div class="sign-up-form">
        <!-- <h1 style="color:purple; font-size:15px;margin-left:60px;">Sign Up</h1> -->
        <form action="login.php" method="POST"><!-- method="POST" -->
			<div class="label">
				<input type="text" class="box" name="username"	placeholder="Enter your username" required="required"> 
			</div>
			<div class="label">
				<input type="text" class="box" name="mobile" placeholder="Enter your mobile number" required="required" maxLength="10" minLength="10" pattern="[0-9]{10}" oninvalid="alert('You must enter 10 digit mobile number only!');"> 
			</div>
			<div class="label">
				<input type="password" class="box" name="password" placeholder="Enter your password" required="required" id="myInput">
                <br><br>
               &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <input type="checkbox" onclick="myFunction()">Show Password
                <script>
                    function myFunction() {
                        var y = document.getElementById("myInput");
                        if (y.type === "password") {
                            y.type = "text";
                            } else {
                                y.type = "password";
                                }
                        }</script>

			</div><br><br>
            <button type="submit" class="btn">SignUp</button>
			
		</form>
        <!-- <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="e-mail" class="box">
        <input type="password" placeholder="password" class="box">
        <button type="button" name="button">Sign up</button> -->
    </div>

   </div> 
   <div class="switch-buttons">
    <input type="button" class="switch-login" value="Sign In">
    <input type="button" class="switch-sign-up" value="Sign Up">
   </div>

</section>
<!-- LOGIN section end --> 



<!-- footer section start -->

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home2.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href=""> <i class="fas fa-angle-right"></i> about</a>
            <a href=""> <i class="fas fa-angle-right"></i> package</a>
            <a href=""> <i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask quwstions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-789</a>
            <a href="#"> <i class="fas fa-phone"></i> +012-345-678</a>
            <a href="#"> <i class="fas fa-envelope"></i> xyz@xyz.com</a>
            <a href="#"> <i class="fas fa-map"></i> delhi, india - 110049</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>

    <div class="credit">credited by <span>Shashank & Ayushi</span> | made with ❤️</div>

</section>

<!-- footer section end -->











   <script type="text/javascript">
    $(document).ready(function(){
        $('.switch-sign-up').click(function() {
            $('.sign-up-form').css({"transform":"translateX(0px)"});
            $('.login-form').css({"transform":"translateX(-255px)"});
        });
        $('.switch-login').click(function() {
            $('.sign-up-form').css({"transform":"translateX(255px)"});
            $('.login-form').css({"transform":"translateX(0px)"});
        });

    });
   </script>
</body>
</html>