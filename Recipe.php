<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

  <!-- CSS -->
    <link rel="stylesheet" href="css/global.css">

    <link rel="stylesheet" media="(max-width: 720px)" href="css/recipe-small.css">
    <link rel="stylesheet" media="(max-width: 720px)" href="css/global-small.css">

    <link rel="stylesheet" media="(min-width: 721px)" href="css/recipe-wide.css">
    <link rel="stylesheet" media="(min-width: 721px)" href="css/global-wide.css">


  <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  
</head>

<body>

  <?php
      include 'Header.php';
  ?>
    <div class="display" id="display1">
        <img src="images/recipe/bg.png" alt="" id="bg">
        <h1>Welcome to</h1>
        <h2>Unhealthy Recipes</h2>
        

    </div>
    <div class="display">
                    <div id="recipe_list">
    
                        <div class="item_holder"  id="item1">
                                
                            <div class="items" >
                                    <!--<div class="price">₱150</div>-->
                                    <img src="images/recipe/popular/dalgona.png" class="photo">
                                    <div class="names_item">Dalgona Coffee </div>
                                    <i class="fa-solid fa-star" id="item1_star1"></i>
                                    <i class="fa-solid fa-star" id="item1_star2"></i>
                                    <i class="fa-solid fa-star" id="item1_star3"></i>
                                    <i class="fa-solid fa-star" id="item1_star4"></i>
                                    <i class="fa-solid fa-star" id="item1_star5"></i>
                                    <div class="reactions">
                                        <button onclick="show1()"><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A trendy whipped coffee <br> treat from South Korea. Equal parts instant coffee, sugar, and hot water whipped to a creamy froth. Spoon over milk for a visually striking and deliciously sweet caffeine fix. Perfect for coffee lovers and social media enthusiasts alike.</div>
                                    </div>
                                    
                            </div>
                            </div>


                            <div class="item_holder" id="item2">
                                <div class="items" >
                                    
                                    <img src="images/recipe/popular/fries.png" class="photo"> 
                                    <div class="names_item">French Fries</div>
                                    <i class="fa-solid fa-star" id="item2_star1"></i>
                                    <i class="fa-solid fa-star" id="item2_star2"></i>
                                    <i class="fa-solid fa-star" id="item2_star3"></i>
                                    <i class="fa-solid fa-star" id="item2_star4"></i>
                                    <i class="fa-solid fa-star" id="item2_star5"></i>  
                                    <div class="reactions">
                                        <button onclick="show2()"><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">French fries are crispy<br>potato strips enjoyed as a popular snack worldwide. They're deep-fried, seasoned with salt, and often served with dipping sauces.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_holder"  id="item3">
                                <div class="items">
                                    <img src="images/recipe/popular/fried_chicken.png" class="photo">  
                                    <div class="names_item">Fried Chicken</div>
                                    <i class="fa-solid fa-star" id="item3_star1"></i>
                                    <i class="fa-solid fa-star" id="item3_star2"></i>
                                    <i class="fa-solid fa-star" id="item3_star3"></i>
                                    <i class="fa-solid fa-star" id="item3_star4"></i>
                                    <i class="fa-solid fa-star" id="item3_star5"></i> 
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A timeless snack, the hotdog in a bun features a sausage with condiments in a sliced bun.</div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="item_holder"  id="item4">
                                <div class="items"> 
                                    <img src="images/recipe/trend/carbonara.png" class="photo">  
                                    <div class="names_item">Carbonara</div>
                                    <i class="fa-solid fa-star" id="item4_star1"></i>
                                    <i class="fa-solid fa-star" id="item4_star2"></i>
                                    <i class="fa-solid fa-star" id="item4_star3"></i>
                                    <i class="fa-solid fa-star" id="item4_star4"></i>
                                    <i class="fa-solid fa-star" id="item4_star5"></i> 
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A timeless snack, the hotdog in a bun features a sausage with condiments in a sliced bun.</div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="item_holder"  id="item5">
                                <div class="items"> 
                                    <img src="images/recipe/trend/corndog .png" class="photo">  
                                    <div class="names_item">Corndog</div>
                                    <i class="fa-solid fa-star" id="item5_star1"></i>
                                    <i class="fa-solid fa-star" id="item5_star2"></i>
                                    <i class="fa-solid fa-star" id="item5_star3"></i>
                                    <i class="fa-solid fa-star" id="item5_star4"></i>
                                    <i class="fa-solid fa-star" id="item5_star5"></i> 
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A timeless snack, the hotdog in a bun features a sausage with condiments in a sliced bun.</div>
                                    </div>
                                </div>
                            </div>


                    </div>
                    
                    <div id="popular">
                    
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
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
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
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A sundae bursting with flavor from a variety of ice cream flavors, syrups, and toppings.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_holder"  id="item3">
                                <div class="items"> 
                                    
                                    <img src="images/recipe/new/hotdog.png" class="photo">  
                                    <div class="names_item">Bacon & Hamburger </div>
                                    <i class="fa-solid fa-star" id="item3_star1"></i>
                                    <i class="fa-solid fa-star" id="item3_star2"></i>
                                    <i class="fa-solid fa-star" id="item3_star3"></i>
                                    <i class="fa-solid fa-star" id="item3_star4"></i>
                                    <i class="fa-solid fa-star" id="item3_star5"></i> 
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A timeless snack, the hotdog in a bun features a sausage with condiments in a sliced bun.</div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="item_holder"  id="item4">
                                <div class="items"> 
                                    
                                    
                                </div>
                            </div>
                            <div class="item_holder"  id="item5">
                                <div class="items"> 
                                    
                                </div>
                            </div>


                    </div>
                    <div id="trending">
                    
                            <div class="item_holder"  id="item1">
                                
                                <div class="items" >
                                    
                                </div>
                            </div>
                            <div class="item_holder" id="item2">
                                <div class="items" >
                                    
                                </div>
                            </div>
                            <div class="item_holder"  id="item3">
                                <div class="items"> 
                                    
                                    
                                </div>
                            </div>
                            <div class="item_holder"  id="item4">
                                <div class="items"> 
                                    
                                    
                                </div>
                            </div>
                            <div class="item_holder"  id="item5">
                                <div class="items"> 
                                    
                                </div>
                            </div>

                    </div>        
    </div>
    <div class="items_holder recipe1">
        <button id="exit" onclick="exit1()">X</button>
       <div class="recipe_holder">
            <div class="recipe_full">
                <div class="img_holder">
                    <img src="images/recipe/recipes_info/dalgona.jpeg">
                    <div class="title_holder">
                        <h1>Dalgona Coffee</h1>
                        <hr>
                        <p>A trendy whipped coffee treat from South Korea. Equal parts instant coffee, sugar, and hot water whipped to a creamy froth. Spoon over milk for a visually striking and deliciously sweet caffeine fix. Perfect for coffee lovers and social media enthusiasts alike.</p>
                    </div>
                </div>
                <div class="ingredients_holder">
                    <h1>Ingredients</h1>
                    <hr>
                    <ul>
                        <li>2 tablespoons instant coffee</li>
                        <li>2 tablespoons sugar</li>
                        <li>2 tablespoons hot water</li>
                        <li>Milk (any type you prefer)</li>
                        <li>Ice cubes (optional)</li>
                    </ul>
                    <div class="additional_holder">
                        <h2>Suit your taste</h2>
                        <h3>You can experiment and add additional flavors</h3>
                        <ul>
                            <li>Vanilla Extract</li>
                            <li>Cocoa Powder</li>
                            <li>Cinnamon</li>
                            <li>Flavored Syrups</li>
                            <li>Coconut Milk</li>
                            <li>Matcha Powder</li>
                        </ul>
                    </div>
                </div>
                <div class="procedure_holder">
                    <hr>
                    <h1>Procedure</h1>
                    <ol>
                        <li>In a mixing bowl, combine the instant coffee, granulated sugar, and hot water.</li>
                        <li>Using an electric hand mixer or a whisk, vigorously beat the mixture for about 2-3 minutes until it becomes thick and frothy. If using a whisk, it will take longer and require more effort.</li>
                        <li>Fill a glass with milk of your choice, leaving some space at the top for the whipped coffee.</li>
                        <li>Spoon the whipped coffee mixture on top of the milk. You can spoon it as is or use a piping bag or a ziplock bag with a corner snipped off to create a decorative pattern.</li>
                        <li>If desired, you can sprinkle some cocoa powder, cinnamon, or crushed cookies on top for added flavor and presentation.</li>
                        <li>If you prefer a cold drink, you can add ice cubes to the glass before pouring the milk and whipped coffee.</li>
                    </ol>

                </div>
            </div>
       </div>
    </div>
    <div class="items_holder recipe2">
        <button id="exit" onclick="exit2()">X</button>
       <div class="recipe_holder">
            <div class="recipe_full">
                <div class="img_holder">
                    <img src="images/recipe/recipes_info/french_fries.jpg">
                    <div class="title_holder">
                        <h1>French Fries</h1>
                        <hr>
                        <p>French fries are crispy potato strips enjoyed as a popular snack worldwide. They're deep-fried, seasoned with salt, and often served with dipping sauces.</p>
                    </div>
                </div>
                <div class="ingredients_holder">
                    <h1>Ingredients</h1>
                    <hr>
                    <ul>
                        <li>2 tablespoons instant coffee</li>
                        <li>2 tablespoons sugar</li>
                        <li>2 tablespoons hot water</li>
                        <li>Milk (any type you prefer)</li>
                        <li>Ice cubes (optional)</li>
                    </ul>
                    <div class="additional_holder">
                        <h2>Suit your taste</h2>
                        <h3>You can experiment and add additional flavors</h3>
                        <ul>
                            <li>Vanilla Extract</li>
                            <li>Cocoa Powder</li>
                            <li>Cinnamon</li>
                            <li>Flavored Syrups</li>
                            <li>Coconut Milk</li>
                            <li>Matcha Powder</li>
                        </ul>
                    </div>
                </div>
                <div class="procedure_holder">
                    <hr>
                    <h1>Procedure</h1>
                    <ol>
                        <li>In a mixing bowl, combine the instant coffee, granulated sugar, and hot water.</li>
                        <li>Using an electric hand mixer or a whisk, vigorously beat the mixture for about 2-3 minutes until it becomes thick and frothy. If using a whisk, it will take longer and require more effort.</li>
                        <li>Fill a glass with milk of your choice, leaving some space at the top for the whipped coffee.</li>
                        <li>Spoon the whipped coffee mixture on top of the milk. You can spoon it as is or use a piping bag or a ziplock bag with a corner snipped off to create a decorative pattern.</li>
                        <li>If desired, you can sprinkle some cocoa powder, cinnamon, or crushed cookies on top for added flavor and presentation.</li>
                        <li>If you prefer a cold drink, you can add ice cubes to the glass before pouring the milk and whipped coffee.</li>
                    </ol>

                </div>
            </div>
       </div>
    </div>

<?php
    include 'Footer.php';
?>
  <script src="js/script.js"></script>

</body>
</html>
