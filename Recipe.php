<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe</title>

  <!--Icon-->
  <link rel="icon" type="image/png" href="images/logo_smallpng.png">

  <!-- CSS -->
    <link rel="stylesheet" href="CSS/global.css">

    <link rel="stylesheet" media="(max-width: 720px)" href="CSS/recipe-small.css">
    <link rel="stylesheet" media="(max-width: 720px)" href="CSS/global-small.css">

    <link rel="stylesheet" media="(min-width: 721px)" href="CSS/recipe-wide.css">
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
    <div class="display" id="display1">
        <img src="images/recipe/bg.png" alt="" id="bg">
        <h1>Welcome to</h1>
        <h2>Unhealthy Recipes</h2>
        

    </div>
    <div class="display">
                    <div id="recipe_list" class="slidein-effect">
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
                                        <div class="item_description">A trendy whipped<br>coffee treat from South Korea. Equal parts instant coffee, sugar, and hot water whipped to a creamy froth. Spoon over milk for a visually striking and deliciously sweet caffeine fix. Perfect for coffee lovers and social media enthusiasts alike.</div>
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
                                        <button onclick="show3()"><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">Crispy, golden fried<br> chicken: tender meat, flavorful crunch. Enjoy as a main dish or in sandwiches and salads. A delicious and versatile favorite.</div>
                                    </div>
                                    
                                </div>
                        </div>
                        <div class="item_holder"  id="item4">
                                <div class="items"> 
                                    <img src="images/recipe/popular/carbonara.png" class="photo">  
                                    <div class="names_item">Carbonara</div>
                                    <i class="fa-solid fa-star" id="item4_star1"></i>
                                    <i class="fa-solid fa-star" id="item4_star2"></i>
                                    <i class="fa-solid fa-star" id="item4_star3"></i>
                                    <i class="fa-solid fa-star" id="item4_star4"></i>
                                    <i class="fa-solid fa-star" id="item4_star5"></i> 
                                    <div class="reactions">
                                        <button onclick="show4()"><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A classic Italian<br>pasta dish. It features crispy bacon or pancetta, eggs, Parmesan cheese, and black pepper, creating a rich and satisfying combination. </div>
                                    </div>
                                    
                                </div>
                        </div>
                        <div class="item_holder"  id="item5">
                                <div class="items"> 
                                    <img src="images/recipe/popular/corndog.png" class="photo">  
                                    <div class="names_item">Corndog</div>
                                    <i class="fa-solid fa-star" id="item5_star1"></i>
                                    <i class="fa-solid fa-star" id="item5_star2"></i>
                                    <i class="fa-solid fa-star" id="item5_star3"></i>
                                    <i class="fa-solid fa-star" id="item5_star4"></i>
                                    <i class="fa-solid fa-star" id="item5_star5"></i> 
                                    <div class="reactions">
                                        <button onclick="show5()"><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A delicious snack<br>made of a hot dog coated in sweet cornbread batter, fried until crispy. It's a popular treat often enjoyed at fairs and outdoor events.</div>
                                    </div>
                                </div>
                        </div>
                        <div class="item_holder"  id="item6">
                                <div class="items"> 
                                    <img src="images/recipe/popular/churros.png" class="photo">  
                                    <div class="names_item">Churros</div>
                                    <i class="fa-solid fa-star" id="item6_star1"></i>
                                    <i class="fa-solid fa-star" id="item6_star2"></i>
                                    <i class="fa-solid fa-star" id="item6_star3"></i>
                                    <i class="fa-solid fa-star" id="item6_star4"></i>
                                    <i class="fa-solid fa-star" id="item6_star5"></i> 
                                    <div class="reactions">
                                        <button onclick="show6()"><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">Coated in cinnamon<br>and sugar, they are a sweet and delightful treat often enjoyed with chocolate sauce.</div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    
                    <div id="popular" class="scroll-effect">
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
                                        <div class="item_description">A delicious burger<br> that combines crispy bacon and flavorful ham for a smoky and savory taste experience.</div>
                                
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
                                        <div class="item_description">A delightful dessert<br> with a variety of ice cream flavors layered or swirled together, topped with an array of delicious toppings.</div>
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
                                        <div class="item_description">A delicious handheld<br> meal featuring a sausage nestled inside a soft bun, topped with flavorful condiments.</div>
                                    </div>
                                    
                                </div>
                        </div>
                        <div class="item_holder"  id="item4">
                            <div class="items"> 
                                    <img src="images/recipe/new/Kori_kohi.png" class="photo">  
                                    <div class="names_item">Kori Kohi</div>
                                    <i class="fa-solid fa-star" id="item4_star1"></i>
                                    <i class="fa-solid fa-star" id="item4_star2"></i>
                                    <i class="fa-solid fa-star" id="item4_star3"></i>
                                    <i class="fa-solid fa-star" id="item4_star4"></i>
                                    <i class="fa-solid fa-star" id="item4_star5"></i> 
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A refreshing Japanese<br>iced coffee with coffee cubes served over milk or coffee-milk blend for a unique and chilled coffee experience. </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="item_holder"  id="item5">
                            <div class="items"> 
                                    <img src="images/recipe/new/mango_graham.png" class="photo">  
                                    <div class="names_item">Mango-Graham</div>
                                    <i class="fa-solid fa-star" id="item5_star1"></i>
                                    <i class="fa-solid fa-star" id="item5_star2"></i>
                                    <i class="fa-solid fa-star" id="item5_star3"></i>
                                    <i class="fa-solid fa-star" id="item5_star4"></i>
                                    <i class="fa-solid fa-star" id="item5_star5"></i> 
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A luscious Filipino<br> dessert with layers of graham crackers, sweet cream, and ripe mango slices, creating a delightful and refreshing no-bake treat.</div>
                                    </div>
                                </div>
                        </div>
                        <div class="item_holder"  id="item6">
                            <div class="items"> 
                                    <img src="images/recipe/new/doughnut.png" class="photo">  
                                    <div class="names_item">Doughnut</div>
                                    <i class="fa-solid fa-star" id="item6_star1"></i>
                                    <i class="fa-solid fa-star" id="item6_star2"></i>
                                    <i class="fa-solid fa-star" id="item6_star3"></i>
                                    <i class="fa-solid fa-star" id="item6_star4"></i>
                                    <i class="fa-solid fa-star" id="item6_star5"></i> 
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A sweet, fried<br> or baked pastry that is typically ring-shaped and enjoyed as a delicious treat.</div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    
                    <div id="trending" class="scroll-effect">
                        <div class="item_holder"  id="item1">
                                
                                <div class="items" >
                                    
                                    <img src="images/recipe/trend/cookies.png" class="photo">
                                    <div class="names_item">Cookies</div>
                                    <i class="fa-solid fa-star" id="item1_star1"></i>
                                    <i class="fa-solid fa-star" id="item1_star2"></i>
                                    <i class="fa-solid fa-star" id="item1_star3"></i>
                                    <i class="fa-solid fa-star" id="item1_star4"></i>
                                    <i class="fa-solid fa-star" id="item1_star5"></i>
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">Baked treats made<br>from flour, sugar, butter, and flavorings like chocolate chips or nuts. Enjoy in moderation due to their high sugar and calorie content.</div>
                                    </div>
                                </div>
                        </div>
                        <div class="item_holder" id="item2">
                                <div class="items" >
                                    
                                    <img src="images/recipe/trend/lumpia.png" class="photo"> 
                                    <div class="names_item">Pork Lumpia</div>
                                    <i class="fa-solid fa-star" id="item2_star1"></i>
                                    <i class="fa-solid fa-star" id="item2_star2"></i>
                                    <i class="fa-solid fa-star" id="item2_star3"></i>
                                    <i class="fa-solid fa-star" id="item2_star4"></i>
                                    <i class="fa-solid fa-star" id="item2_star5"></i>  
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A crispy Filipino<br> appetizer made with ground pork, vegetables, and seasonings, commonly served with a dipping sauce.</div>
                                    </div>
                                </div>
                        </div>
                        <div class="item_holder"  id="item3">
                                <div class="items"> 
                                    
                                    <img src="images/recipe/trend/milkshake.png" class="photo">  
                                    <div class="names_item">Milkshakes</div>
                                    <i class="fa-solid fa-star" id="item3_star1"></i>
                                    <i class="fa-solid fa-star" id="item3_star2"></i>
                                    <i class="fa-solid fa-star" id="item3_star3"></i>
                                    <i class="fa-solid fa-star" id="item3_star4"></i>
                                    <i class="fa-solid fa-star" id="item3_star5"></i> 
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A creamy beverage<br> made by blending milk, ice cream, and flavorings for a sweet and refreshing treat.</div>
                                    </div>
                                    
                                </div>
                        </div>
                        <div class="item_holder"  id="item4">
                            <div class="items"> 
                                    <img src="images/recipe/trend/nachos.png" class="photo">  
                                    <div class="names_item">Nachos</div>
                                    <i class="fa-solid fa-star" id="item4_star1"></i>
                                    <i class="fa-solid fa-star" id="item4_star2"></i>
                                    <i class="fa-solid fa-star" id="item4_star3"></i>
                                    <i class="fa-solid fa-star" id="item4_star4"></i>
                                    <i class="fa-solid fa-star" id="item4_star5"></i> 
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">Crispy tortilla<br> chips topped with melted cheese and savory ingredients like salsa, guacamole, and sour cream, creating a delicious snack or appetizer.</div>
                                    </div>
                                    
                                </div>
                        </div>
                        <div class="item_holder"  id="item5">
                            <div class="items"> 
                                    <img src="images/recipe/trend/pizza.png" class="photo">  
                                    <div class="names_item">Pizza</div>
                                    <i class="fa-solid fa-star" id="item5_star1"></i>
                                    <i class="fa-solid fa-star" id="item5_star2"></i>
                                    <i class="fa-solid fa-star" id="item5_star3"></i>
                                    <i class="fa-solid fa-star" id="item5_star4"></i>
                                    <i class="fa-solid fa-star" id="item5_star5"></i> 
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">A round flatbread<br>topped with tomato sauce, cheese, and various toppings, baked to perfection for a delicious and customizable meal.</div>
                                    </div>
                                </div>
                        </div>
                        <div class="item_holder"  id="item6">
                            <div class="items"> 
                                    <img src="images/recipe/trend/onion_rings.png" class="photo">  
                                    <div class="names_item">Onion Rings</div>
                                    <i class="fa-solid fa-star" id="item6_star1"></i>
                                    <i class="fa-solid fa-star" id="item6_star2"></i>
                                    <i class="fa-solid fa-star" id="item6_star3"></i>
                                    <i class="fa-solid fa-star" id="item6_star4"></i>
                                    <i class="fa-solid fa-star" id="item6_star5"></i> 
                                    <div class="reactions">
                                        <button><i class="fa-solid fa-circle-plus"></i></button>
                                        <div class="item_description">Crispy deep-fried<br> snacks made from sliced onions, enjoyed for their crunchy texture and savory flavor.</div>
                                    </div>
                                </div>
                        </div>
                    </div> 
                         
    </div>
    <div class="items_holder recipe1">
        <button id="exit" onclick="exit1()">X</button>
       <div class="recipe_holder">
                <div class="recipe_footer">
                    <img src="images/recipe/recipes_info/footer.png" alt="">
                </div>
                <div class="img_holder">
                    <img src="images/recipe/recipes_info/dalgona.jpeg">
                    <div class="title_holder">
                        <hr>
                        <h1>Dalgona Coffee</h1>
                        <p>A trendy whipped coffee treat from South Korea. Equal parts instant coffee, sugar, and hot water whipped to a creamy froth. Spoon over milk for a visually striking and deliciously sweet caffeine fix.</p>
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
                <div class="recipe_footer">
                </div>
       </div>
    </div>
    <div class="items_holder recipe2">
        <button id="exit" onclick="exit2()">X</button>
       <div class="recipe_holder">
            <div class="recipe_full">
                <div class="recipe_footer">
                    <img src="images/recipe/recipes_info/footer.png" alt="">
                </div>
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
                        <li>4 large potatoes</li>
                        <li>Oil for frying</li>
                        <li>Salt</li>
                        <li>Seasonings (optional): garlic powder, paprika or black pepper</li>

                    </ul>
                    <div class="additional_holder">
                        <h2>Dip into deliciousness!</h2>
                        <h3>Customize your taste with our dips</h3>
                        <ul>
                            <li>Ketchup</li>
                            <li>Mayonnaise</li>
                            <li>Cheese Sauce</li>
                            <li>Mustard</li>
                            <li>Barbecue Sauce</li>
                            <li>Aioli</li>
                        </ul>
                    </div>
                </div>
                <div class="procedure_holder">
                    <hr>
                    <h1>Procedure</h1>
                    <ol>
                        <li>Peel the potatoes and cut them into long, thin strips, about 1/4 inch (0.6 cm) thick.</li>
                        <li>Place the potato strips in a bowl of cold water and let them soak for 30 minutes.</li>
                        <li>Drain the potatoes and pat them dry with a towel.</li>
                        <li>Heat vegetable oil in a deep fryer or large pot to 375°F (190°C).</li>
                        <li>Fry the potato strips in batches for about 5-7 minutes or until golden brown and crispy.</li>
                        <li>Remove the fries from the oil, drain excess oil on paper towels, and sprinkle with salt to taste.</li>
                        <li>Season the fries with salt and any additional seasonings of your choice, such as garlic powder, paprika, black pepper, or dried herbs like rosemary or thyme. Toss them gently to ensure even coating.</li>
                    </ol>

                </div>
            </div>
       </div>
    </div>
    <div class="items_holder recipe3">
        <button id="exit" onclick="exit3()">X</button>
       <div class="recipe_holder">
            <div class="recipe_full">
                <div class="recipe_footer">
                    <img src="images/recipe/recipes_info/footer.png" alt="">
                </div>
                <div class="img_holder">
                    <img src="images/recipe/recipes_info/fried_chicken.jpg">
                    <div class="title_holder">
                        <h1>Fried Chicken</h1>
                        <hr>
                        <p>Crispy, golden fried chicken: tender meat, flavorful crunch. Enjoy as a main dish or in sandwiches and salads. A delicious and versatile favorite.</p>
                    </div>
                </div>
                <div class="ingredients_holder">
                    <h1>Ingredients</h1>
                    <hr>
                    <ul>
                        <li>4 chicken drumsticks or thighs</li>
                        <li>Oil for frying</li>
                        <li>1 cup all-purpose flour</li>
                        <li>1 teaspoon salt</li>
                        <li>1 teaspoon black pepper</li>
                        <li>1/2 teaspoon garlic powder</li>

                    </ul>
                    <div class="additional_holder">
                        <h2>Dip into deliciousness!</h2>
                        <h3>Customize your taste with our dips</h3>
                        <ul>
                            <li>Ketchup</li>
                            <li>Mayonnaise</li>
                            <li>Cheese Sauce</li>
                            <li>Mustard</li>
                            <li>Barbecue Sauce</li>
                            <li>Aioli</li>
                        </ul>
                    </div>
                </div>
                <div class="procedure_holder">
                    <hr>
                    <h1>Procedure</h1>
                    <ol>
                        <li>Mix flour, salt, black pepper, paprika, and garlic powder in a dish.</li>
                        <li>Pat the chicken pieces dry with a paper towel.</li>
                        <li>Coat chicken with the flour mixture, shaking off excess.</li>
                        <li>Heat vegetable oil in a large pan over medium heat.</li>
                        <li>Carefully place coated chicken in the hot oil, skin side down. Avoid crowding the pan.</li>
                        <li>Fry chicken for 6-8 minutes per side until crispy, golden, and internal temperature reaches 165°F (74°C).</li>
                        <li>Drain fried chicken on paper towels.</li>
                        <li>Let it rest for a few minutes before serving.</li>
                        <li>Serve the simple fried chicken hot and enjoy it as is or with your favorite sides, such as mashed potatoes, coleslaw, or cornbread.</li>
                    </ol>

                </div>
            </div>
       </div>
    </div>
    <div class="items_holder recipe4">
        <button id="exit" onclick="exit4()">X</button>
       <div class="recipe_holder">
            <div class="recipe_full">
                <div class="recipe_footer">
                    <img src="images/recipe/recipes_info/footer.png" alt="">
                </div>
                <div class="img_holder">
                    <img src="images/recipe/recipes_info/carbonara.jpg">
                    <div class="title_holder">
                        <h1>Carbonara</h1>
                        <hr>
                        <p>A classic Italian pasta dish. It features crispy bacon or pancetta, eggs, Parmesan cheese, and black pepper, creating a rich and satisfying combination. </p>
                    </div>
                </div>
                <div class="ingredients_holder">
                    <h1>Ingredients</h1>
                    <hr>
                    <ul>
                        <li>225 grams pasta</li>
                        <li>115 grams diced bacon</li>
                        <li>2 large eggs</li>
                        <li>1/2 cup grated Parmesan cheese</li>
                        <li>Freshly ground black pepper</li>
                        <li>Salt</li>

                    </ul>
                    <div class="additional_holder">
                        <h2>Add ons</h2>
                        <h3>Color your food pallete</h3>
                        <ul>
                            <li>Spinach</li>
                            <li>Mushrooms</li>
                            <li>Cream</li>
                            <li>Fresh Herbs</li>
                            <li>Extra Cheese</li>
                            <li>Garlic</li>
                        </ul>
                    </div>
                </div>
                <div class="procedure_holder">
                    <hr>
                    <h1>Procedure</h1>
                    <ol>
                        <li>Mix flour, salt, black pepper, paprika, and garlic powder in a dish.</li>
                        <li>Pat the chicken pieces dry with a paper towel.</li>
                        <li>Coat chicken with the flour mixture, shaking off excess.</li>
                        <li>Heat vegetable oil in a large pan over medium heat.</li>
                        <li>Carefully place coated chicken in the hot oil, skin side down. Avoid crowding the pan.</li>
                        <li>Fry chicken for 6-8 minutes per side until crispy, golden, and internal temperature reaches 165°F (74°C).</li>
                        <li>Drain fried chicken on paper towels.</li>
                        <li>Let it rest for a few minutes before serving.</li>
                        <li>Serve the simple fried chicken hot and enjoy it as is or with your favorite sides, such as mashed potatoes, coleslaw, or cornbread.</li>
                    </ol>

                </div>
            </div>
       </div>
    </div>
    <div class="items_holder recipe5">
        <button id="exit" onclick="exit5()">X</button>
       <div class="recipe_holder">
            <div class="recipe_full">
                <div class="recipe_footer">
                    <img src="images/recipe/recipes_info/footer.png" alt="">
                </div>
                <div class="img_holder">
                    <img src="images/recipe/recipes_info/corndog.jpg">
                    <div class="title_holder">
                        <h1>Corndog</h1>
                        <hr>
                        <p>A delicious snack made of a hot dog coated in sweet cornbread batter, fried until crispy. It's a popular treat often enjoyed at fairs and outdoor events.</p>
                    </div>
                </div>
                <div class="ingredients_holder">
                    <h1>Ingredients</h1>
                    <hr>
                    <ul>
                        <li>6 hot dogs</li>
                        <li>1 cup cornmeal</li>
                        <li>1/2 cup all-purpose flour</li>
                        <li>1 tablespoon sugar</li>
                        <li>1 teaspoon baking powder</li>
                        <li>1/2 teaspoon salt</li>
                        <li>1 cup milk</li>
                        <li>6 slices of cheddar cheese (cut into strips)</li>
                        <li>Vegetable oil, for frying</li>
                        <li>Wooden skewers or popsicle sticks</li>

                    </ul>
                    <div class="note_holder">
                        <p>NOTE:<br>Please be cautious when working with hot oil and follow appropriate safety guidelines.</p>
                    </div>
                </div>
                <div class="procedure_holder">
                    <hr>
                    <h1>Procedure</h1>
                    <ol>
                        <li>In a bowl, combine the cornmeal, flour, sugar, baking powder, and salt.</li>
                        <li>Gradually pour in the milk while stirring until a thick batter forms.</li>
                        <li>Insert a wooden skewer or popsicle stick into each hot dog.</li>
                        <li>Take a strip of cheddar cheese and wrap it around each hot dog.</li>
                        <li>Dip each cheese-wrapped hot dog into the batter, ensuring it is fully coated.</li>
                        <li>Heat vegetable oil in a pot about 350°F (175°C).</li>
                        <li>Fry the coated corndogs until golden brown</li>
                        <li>Use tongs or a slotted spoon to remove the corndogs from the oil and let them drain on a paper towel.
                        
                    </ol>

                </div>
            </div>
       </div>
    </div>
    <div class="items_holder recipe6">
        <button id="exit" onclick="exit6()">X</button>
       <div class="recipe_holder">
            <div class="recipe_full">
                <div class="recipe_footer">
                    <img src="images/recipe/recipes_info/footer.png" alt="">
                </div>
                <div class="img_holder">
                    <img src="images/recipe/recipes_info/churros.jpg">
                    <div class="title_holder">
                        <h1>Churros</h1>
                        <hr>
                        <p>Coated in cinnamon and sugar, they are a sweet and delightful treat often enjoyed with chocolate sauce.</p>
                    </div>
                </div>
                <div class="ingredients_holder">
                    <h1>Ingredients</h1>
                    <hr>
                    <ul>
                        <li>1 cup water</li>
                        <li>2 tablespoons sugar</li>
                        <li>1/2 teaspoon salt</li>
                        <li>1 cup all-purpose flour</li>
                        <li>2 tablespoons vegetable oil</li>
                        <li>1 cup milk</li>
                        <li>1/4 cup sugar </li>
                        <li>1 teaspoon ground cinnamon</li>
                        <li>1 teaspoon vanilla extract</li>
                        <li>Chocolate sauce or dulce de leche, for dipping (optional)</li>

                    </ul>
                    <div class="note_holder">
                        <p>NOTE:<br>Please be cautious when working with hot oil and follow appropriate safety guidelines.</p>
                    </div>
                </div>
                <div class="procedure_holder">
                    <hr>
                    <h1>Procedure</h1>
                    <ol>
                        <li>In a saucepan, bring water, sugar, salt, and vegetable oil to a boil.</li>
                        <li>Remove the saucepan from the heat and stir in the vanilla extract.</li>
                        <li>Gradually add the flour to the mixture, stirring until a smooth dough forms.</li>
                        <li>Heat vegetable oil in a deep pot or frying pan to190°C.</li>
                        <li>Transfer the dough to a piping bag and pipe 4-6 inch strips into the hot oil.</li>
                        <li>Fry until golden brown, around 2-4 minutes. Drain on paper towels.</li>
                        <li>In a bowl, combine sugar and ground cinnamon for coating.</li>
                        <li>While the churros are still warm, roll them in the cinnamon-sugar mixture until coated.</li>
                        
                    </ol>

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
