<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

  <!--Icon-->
  <link rel="icon" type="image/png" href="images/logo_smallpng.png">

  <!-- CSS -->
    <link rel="stylesheet" href="CSS/global.css">

    <link rel="stylesheet" media="(max-width: 720px)" href="CSS/about-small.css">
    <link rel="stylesheet" media="(max-width: 720px)" href="CSS/global-small.css">

    <link rel="stylesheet" media="(min-width: 721px)" href="CSS/about-wide.css">
    <link rel="stylesheet" media="(min-width: 721px)" href="CSS/global-wide.css">


  <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  
</head>

<body>

  <?php
        include 'header.php';
  ?>

  <div id="display1">
    <img src="images/about/bg2.png" alt="" id="bg">
    <h1>Welcome to our</h1>
    <h2>About Page</h2>
  </div>
  <div id="display2" class="slidein-effect">
        <div id="saying_holder">
            <h1 id="qoute1">"</h1>
            <h1 id="qoute2">"</h1>
            <p>As food enthusiasts, we believe that cooking is not just a necessity but an art form that brings people together. Our goal is to provide a platform where individuals can explore a wide range of delicious recipes, from traditional favorites to innovative culinary creations.</p>
        </div>
        <img src="images/about/girl.png" alt="" id="girl" >
        <div id="orange_bot">
        </div>
  </div>
  <div id="display3" class="scroll-effect">
    <h1>Meet Our Team </h1>
    <div id="authors">
        <div class="info_holder">
            <div class="img_holder">
                <img src="images/about/kent.jpg">
            </div>
            <div class="txt_holder">
                <p>We leverage our technical skills to enhance the user experience on our website, ensuring that you have easy access to a wide range of recipes, beautiful visuals, and helpful cooking instructions. <br><br>-Kent Divinagracia</p>
            </div>
        </div>

        <div class="info_holder">
            <div class="img_holder">
            <img src="images/about/shaan.jpg">
            </div>
            <div class="txt_holder">
                <p>With each recipe we share, we hope to ignite your passion for cooking and empower you to explore new flavors and techniques in the kitchen.Thank you for being a part of our culinary community. <br><br>-Shaan Uddin</p>
            </div>
        </div>
    </div>
  </div>
  <?php
        include 'footer.php';
  ?>

<script src="JS/script1.js"></script>


</body>
</html>
