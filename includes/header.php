<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link type="text/css" rel="stylesheet" href="css/styles.css">
    <link type="text/css" rel="stylesheet" href="css/forms.css">

 </head>
    <body class="<?php echo $body; ?>">
    <h1><?php echo $title; ?></h1>
      <header>
      
         <div class="topnav" id="myTopnav">
                  <?php
                     echo make_links($nav);
                  ?>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
         </div>

         <script>
            function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
               x.className += " responsive";
            } else {
               x.className = "topnav";
            }
            }
         </script>

      </header>