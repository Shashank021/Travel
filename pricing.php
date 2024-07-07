<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pricing.css">

</head>
<body>

<!-- header section start-->
<section class="header">
    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="pricing.php">pricing</a>
        <a href="book.php">book</a>
        </nav>

    <div id="menu-btn" class="fas fa-bars"></div>



</section>
<!-- header section end -->





<div class="container">

    <div class="price-toggler">
        <span class="month active">monthly</span>
        <span class="year">yearly</span>
    </div>

    <div class="box-container">

        <div class="box">
            <h3>basic</h3>
            <div class="price month"><span>INR. </span>10<span>00</span></div>
            <div class="price year"><span>INR. </span>30<span>00</span></div>
            <div class="list">
                <p> <i class="fas fa-check"></i> 1 person </p>
                <p> <i class="fas fa-check"></i> 10GB storage </p>
                <p> <i class="fas fa-check"></i> 1 domain </p>
                <p> <i class="fas fa-check"></i> team support </p>
                <p> <i class="fas fa-check"></i> maintenance </p>
            </div>
            <a href="#" class="btn">choose plan</a>
        </div>

        <div class="box">
            <h3>regular</h3>
            <div class="price month"><span>INR. </span>30<span>00</span></div>
            <div class="price year"><span>INR. </span>50<span>00</span></div>
            <div class="list">
                <p> <i class="fas fa-check"></i> 10 person </p>
                <p> <i class="fas fa-check"></i> 50GB storage </p>
                <p> <i class="fas fa-check"></i> 10 domain </p>
                <p> <i class="fas fa-check"></i> team support </p>
                <p> <i class="fas fa-check"></i> maintenance </p>
            </div>
            <a href="#" class="btn">choose plan</a>
        </div>

        <div class="box">
            <h3>business</h3>
            <div class="price month"><span>INR. </span>90<span>00</span></div>
            <div class="price year"><span>INR. </span>150<span>00</span></div>
            <div class="list">
                <p> <i class="fas fa-check"></i> 100 person </p>
                <p> <i class="fas fa-check"></i> 100GB storage </p>
                <p> <i class="fas fa-check"></i> 100 domain </p>
                <p> <i class="fas fa-check"></i> team support </p>
                <p> <i class="fas fa-check"></i> maintenance </p>
            </div>
            <a href="#" class="btn">choose plan</a>
        </div>

    </div>

</div>





<!-- footer section start -->

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
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






<script>

let month = document.querySelector('.price-toggler .month');
let year = document.querySelector('.price-toggler .year');
let monthAmount = document.querySelectorAll('.box-container .box .month');
let yearAmount = document.querySelectorAll('.box-container .box .year');

year.onclick = () =>{
    year.classList.add('active');
    month.classList.remove('active');

    monthAmount.forEach(mo =>{ mo.style.display = 'none' });
    yearAmount.forEach(yr =>{ yr.style.display = 'block' });
};

month.onclick = () =>{
    year.classList.remove('active');
    month.classList.add('active');

    monthAmount.forEach(mo =>{ mo.style.display = 'block' });
    yearAmount.forEach(yr =>{ yr.style.display = 'none' });
};

</script>
    
</body>
</html>
