<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

  <!--Icon-->
  <link rel="icon" type="image/png" href="images/logo_smallpng.png">

  <!-- CSS -->
    <link rel="stylesheet" href="CSS/global.css">

    <link rel="stylesheet" media="(max-width: 720px)" href="CSS/index-small.css">
    <link rel="stylesheet" media="(max-width: 720px)" href="CSS/global-small.css">

    <link rel="stylesheet" media="(min-width: 721px)" href="CSS/index-wide.css">
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

  <div id="display1" class="slidein-effect"> 
    
    <div id="background1">
      <div id="table_holder">
        <img src="images/home/table.jpg" id="table" alt="">
      </div>
      <div class="slider">
        <div class="slides">
          <!--Buttons-Start-->
            <input type="radio" name="radio-btn" id="radio1"> 
            <input type="radio" name="radio-btn" id="radio2"> 
            <input type="radio" name="radio-btn" id="radio3"> 
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">
            <input type="radio" name="radio-btn" id="radio6">  
          <!--Buttons-End-->
          <!--Slides-Start-->
            <div class="slide" id="first">
              <img src="images/home/burger-slide1.png" alt="">
              <div class="saying_holder">
                <h1>Your Way to</h1>
                <h2>Unhealthy Lifestyle</h2>
                <p>"Welcome to Unhealthy: Indulge in Deliciously<br>Decadent Recipes!"</p>
                <a href="recipe.php">Show Recipes</a>
              </div>
            </div>
            <div class="slide" id="second">
              <img src="images/home/pizza-slide2.png" alt="">
                <div class="saying_holder" id="sec">
                  <h1>Dive into</h1>
                  <h2>Culinary Sin</h2>
                  <p>"Unhealthy - Where Excess is<br>Celebrated and Flavor<br>Reigns Supreme!"</p>
                  <a href="recipe.php">Show Recipes</a>
                </div>
            </div>
            <div class="slide third">
              <img src="images/home/fries-slide3.png" alt="">
              <div class="saying_holder" id="thi">
                  <h1>Unleash Your</h1>
                  <h2>Culinary Desires</h2>
                  <p>"Immerse Yourself in Flavorsome Pleasures! <br>Discover a World of IrresistibleRecipes<br>Awaiting Your Indulgence."</p>
                  <a href="recipe.php">Show Recipes</a>
                </div>
            </div>
            <div class="slide fourth">
              <img src="images/home/fried-slide4.png" alt="">
              <div class="saying_holder" id="fou">
                  <h1>Embark on a</h1>
                  <h2>Decadent Journey</h2>
                  <p>"Explore the Art of Indulgence! Delight in<br>Exquisite Creations that Transcend<br>the Ordinary."</p>
                  <a href="recipe.php">Show Recipes</a>
                </div>
            </div>
            <div class="slide fifth">
              <img src="images/home/burger-slide1.png" alt="">
              <div class="saying_holder" id="fif">
                <h1>Your Way to</h1>
                <h2>Unhealthy Lifestyle</h2>
                <p>"Welcome to Unhealthy: Indulge in Deliciously<br>Decadent Recipes!"</p>
                <a href="recipe.php">Show Recipes</a>
              </div>
            </div>
          <!--Slides-End-->
          <!--Automatic Navigation-Start-->
              <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
                <div class="auto-btn5"></div>
                <div class="auto-btn6"></div>
              </div>
              <!--Automatic Navigation-End-->
              <!--Manual Navigation-Start-->
              <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn" id="radio5_s"></label>
                <label for="radio6" class="manual-btn"></label>
                <!--Manual Navigation-End-->
                <!--Left and Right Button-->
                
            </div>  
            <button onclick="next_slide()" id="next_slide"><i class="fa-solid fa-angle-right next_previous_btn"></i></button>
            <button onclick="previous_slide()" id="previous_slide"><i class="fa-solid fa-angle-left next_previous_btn"></i></button>
          </div>
      </div>
    </div>
  </div>

  <div id="display2" class="slidein-effect">
    <div id="whitebox_holder">
      <p>“At Unhealthy, we embrace the sheer joy of indulgence and celebrate the irresistible allure of sinful treats. Here, we invite you to dive into a world of mouth-watering recipes that will satisfy your cravings and awaken your taste buds.”</p>
    </div>
    <div id="orange_holder2">
      <h3>Our Partners</h3> 
      
        <div class="our_partners">

          <a href="https://www.simplyrecipes.com/" target="_blank">
          <div class="partners">
            <img src="images/home/simply_web.png" class="web">
            <img src="images/home/simply.png">
          </div> </a>

          <a href="https://www.allrecipes.com/"  target="_blank">
          <div class="partners">
            <img src="images/home/allrecipes_web.png" class="web">
            <img src="images/home/allrecipes.png" alt=""> 
          </div> </a>
          
          <a href="https://www.tasteofhome.com/" target="_blank">
          <div class="partners">
            <img src="images/home/toh_web.png" class="web">
            <img src="images/home/toh.png" alt="">
          </div></a>

        </div>
      <img src="images/home/chef.png" id="chef1">
    </div>
  </div>

  <div id="display3" class="scroll-effect">
    <p class="scroll-effect">What's New?</p>
                <p class="scroll-effect">COMPLEMENT YOUR PALATE</p>
            <div class="container-items scroll-effect">
                <div class="item_holder"  id="item1">
                    
                    <div class="items" >
                        
                        <img src="images/recipe/new/bacon_ham .png" class="photo">
                        <div class="names_item">Bacon & Hamburger </div>
                        <i class="fa-solid fa-star" id="item1_star1"></i>
                        <i class="fa-solid fa-star" id="item1_star2"></i>
                        <i class="fa-solid fa-star" id="item1_star3"></i>
                        <i class="fa-solid fa-star" id="item1_star4"></i>
                        <i class="fa-solid fa-star" id="item1_star5"></i>
                        <div class="reactions">
                            <a href="recipe.php"><i class="fa-solid fa-circle-plus"></i></a>
                            <div class="item_description">Savor our irresistible bacon hamburger with crispy bacon and juicy beef patty.</div>
                        </div>
                    </div>
                </div>
                <div class="item_holder" id="item2">
                    <div class="items" >
                        
                        <img src="images/recipe/new/sundae.png" class="photo"> 
                        <div class="names_item">Sundae </div>
                        <i class="fa-solid fa-star" id="item2_star1"></i>
                        <i class="fa-solid fa-star" id="item2_star2"></i>
                        <i class="fa-solid fa-star" id="item2_star3"></i>
                        <i class="fa-solid fa-star" id="item2_star4"></i>
                        <i class="fa-solid fa-star" id="item2_star5"></i>  
                        <div class="reactions">
                          <a href="recipe.php"><i class="fa-solid fa-circle-plus"></i></a>
                            <div class="item_description">A sundae bursting with flavor from a variety of ice cream flavors, syrups, and toppings.</div>
                        </div>
                    </div>
                </div>
                <div class="item_holder"  id="item3">
                    <div class="items"> 
                        
                        <img src="images/recipe/new/hotdog.png" class="photo">  
                        <div class="names_item">Hotdog in Bun </div>
                        <i class="fa-solid fa-star" id="item3_star1"></i>
                        <i class="fa-solid fa-star" id="item3_star2"></i>
                        <i class="fa-solid fa-star" id="item3_star3"></i>
                        <i class="fa-solid fa-star" id="item3_star4"></i>
                        <i class="fa-solid fa-star" id="item3_star5"></i> 
                        <div class="reactions">
                          <a href="recipe.php"><i class="fa-solid fa-circle-plus"></i></a>
                            <div class="item_description">A timeless snack, the hotdog in a bun features a sausage with condiments in a sliced bun.</div>
                        </div>
                        
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
