<?php include('./includes/header.php');?>

<main id="hero" class="hero">

</main>


<div class="contact" id="contact">
    <h2>Contact</h2></header>
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