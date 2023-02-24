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
    <link type="text/css" rel="stylesheet" href="css/tables.css">
    <script src="https://use.fontawesome.com/fd82877a60.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,300;1,100;1,300&family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
</head>

    <body class="<?php echo $body; ?>">

    <h1>
      <i class="logo fa <?php echo $logo; ?>">
      </i>
         <?php echo $title; ?>
    </h1>

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