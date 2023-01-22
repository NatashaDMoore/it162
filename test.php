<?php 

include("./includes/header.php")

?>
    <main role="main">
	 <header><h3>Contact Us!</h3></header>
    <p>Inside the source of this file, you can un-comment and test 
        2 different types of forms:
        <div class="indent">
            <ul>
                <li><b>loadContact('simple.php');</b> - a simple contact form with reCAPTCHA</li>
                <li><b>loadContact('multiple.php');</b> - a complex form with reCAPTCHA</li>
            </ul>
        </div>    
    </p>    
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "natashadmoore@gmail.com";  //place your/your client's email address here
        $toName = "Natasha Moore"; //place your client's name here
        $website = "natashadmoore.com";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     </main>

<?php 

include("footer.php")

?>
