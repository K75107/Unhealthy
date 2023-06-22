<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

  <!--Icon-->
  <link rel="icon" type="image/png" href="images/logo_smallpng.png">

  <!-- CSS -->
    <link rel="stylesheet" href="css/global.css">

    <link rel="stylesheet" media="(max-width: 720px)" href="css/contact-small.css">
    <link rel="stylesheet" media="(max-width: 720px)" href="css/global-small.css">

    <link rel="stylesheet" media="(min-width: 721px)" href="css/contact-wide.css">
    <link rel="stylesheet" media="(min-width: 721px)" href="css/global-wide.css">


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

    <div class="display">
        <div class="slide_frame">
            <div class="slideshow">
                <div class="slide first">
                    <img src="images/contact/chef1.png" alt="">
                    <div class="text_holder">
                    <h1>Contact Us</h1>
                    <p>Connecting with us is just a click away! Reach out and let's create something amazing together.</p>
                  </div>
                    
                </div>
                <div class="slide second">
                    <img src="images/contact/location.png" alt="">
                    <p>Sto. Niño Street, Cagayan de Oro, Misamis Oriental, Region X, Philippines</p>
                    <a href="https://www.google.com/maps/place/Lapasan,+Cagayan+de+Oro,+Misamis+Oriental/@8.4857797,124.6572338,17z/data=!3m1!4b1!4m6!3m5!1s0x32fff2c1b919825b:0x6781ab99eba376b6!8m2!3d8.4857744!4d124.6598087!16s%2Fg%2F11g5_vqf51?entry=ttu" target="_blank"><h1>View Location</h1></a>
                </div>
                <div class="slide third">
                <img src="images/contact/chef1.png" alt="">
                    <div class="text_holder">
                    <h1>Contact Us</h1>
                    <p>Connecting with us is just a click away! Reach out and let's create something amazing together.</p>
                </div>
            </div>
        </div>
        </div>
        <div class="message_holder">
          <h1>Get in touch</h1>
          <h2>It's quick and easy.</h2>
          <hr>
          <form>
            <input type="email" id="first_name" name="first_name" placeholder="First Name">
            <input type="email" id="last_name" name="last_name" placeholder="Last Name">
            <input type="email" id="email" name="email" placeholder="Email">
            <textarea id="message" name="message" rows="5" cols="40" placeholder="Message"></textarea>    
          </form>
          <button onclick="show_sent()" id="send">Send Message</button>
          <h3>By clicking send, you agree to our <button id="policy">privacy policy.</button></h3>

        
        </div>
  
    </div>
    <div class="message_sent">
      <div class="sent_holder">
        <div id="green_top"></div>
        <i class="fa-regular fa-circle-check"></i>
        <h1>THANK YOU!</h1>
        <p>Message succesfully delivered.</p>
      </div>

    </div>

    <?php
        include 'footer.php';
  ?>
    <script src="js/script.js"></script>


</body>
</html>
