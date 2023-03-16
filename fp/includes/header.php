<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link type="text/css" rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

    <body class="<?php echo $body; ?>">

    <!-- <h1><?php echo $title; ?></h1> -->

      <header>

         <h1 class="logo">
            <a href="index.php">SEATTLE WOMEN'S<br>FLAG FOOTBALL</a>
         </h1>



         <!-- ===== Naivgation ===== -->      
         <input type="checkbox" class="nav-toggle" id="nav-toggle">
         <nav class="nav" id="myNav">

               <div class="nav-links">

                  <?php echo make_links($nav); ?>
                  <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a> -->

               </div>
         </nav>      

         <label for="nav-toggle" class="nav-toggle-label">
            <span class="icon">&#9776;</span>
         </label>

         <!-- <script>
            function myFunction() {
            var x = document.getElementById("myNav");
            if (x.className === "nav") {
               x.className += " responsive";
            } else {
               x.className = "nav";
            }
            }
         </script> -->

      </header>

      <div class="wrapper">