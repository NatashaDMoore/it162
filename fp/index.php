<?php include('./includes/header.php');?>

<section id="hero" class="hero">

    <div class="banner" data-aos="fade-up">
    <h1>SEATTLE WOMEN'S FLAG FOOTBALL</h1>
    <h2>Welcoming women of all skill levels!</h2>
    <a href="#contact" class="btn">Join Us!</a>
    <!-- <img src="assets/img/hero_wff.jpg" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150"> -->
    </div>

</section><!-- End Hero -->


<div class="contact" id="contact">
    <h2>Contact</h2>
    <?php

        include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "natashadmoore@gmail.com";  //place your/your client's email address here
        $toName = "Natasha Moore"; //place your client's name here
        $website = "natashadmoore.com";  //place NAME of your client's website

        echo loadContact('simple.php');
        // echo loadContact('multiple.php');

    ?>

</div>
<!-- end wrapper -->



<?php include('./includes/footer.php'); ?>