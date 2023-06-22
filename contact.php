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
    <link rel="stylesheet" href="CSS/global.css">

    <link rel="stylesheet" media="(max-width: 720px)" href="CSS/contact-small.css">
    <link rel="stylesheet" media="(max-width: 720px)" href="CSS/global-small.css">

    <link rel="stylesheet" media="(min-width: 721px)" href="CSS/contact-wide.css">
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

    <div class="display slidein-effect">
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
          <h3>By clicking send, you agree to our <button id="policy" onclick="show_policy()">privacy policy.</button></h3>

        
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

    <div class="privacy_policy">
      <button id="exit_privacy" onclick="exit_policy()">X</button>
      <div class="privacy_holder">
        <h1>Privacy Policy</h1>
        <p>This Privacy Policy describes how we collect, use, and disclose your personal information when you send a message to the owner of our website.</p>
        <p>
          <ul>
            <li>Information Collection <br>
                When you send a message to the owner of our website, we may collect certain personal information from you, such as: your name ,your email address ,any additional information you provide in the message
            <li>Use of Information <br>
                We may use the personal information collected from you to respond to your message and provide the requested assistance, communicate with you regarding your inquiry or any follow-up questions, improve our website and services based on your feedback, send you important updates or notifications related to your message.
            </li>
            <li>We treat your personal information with strict confidentiality and do not sell, trade, or transfer it to third parties without your consent, except in specific circumstances. We may engage trusted third-party service providers to assist us in operating our website or providing services to you, and they are obligated to keep your personal information confidential. Additionally, we may disclose your personal information if required by law or to protect our rights, enforce our website policies, or investigate potential violations.</li>
            <li>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, please be aware that no method of transmission over the internet or electronic storage is completely secure.</li>
            <li>You have the right to access, update, or correct your personal information by contacting us directly. You may also object to the processing of your personal information for certain purposes or request the deletion of your personal information, subject to applicable legal requirements.</li>
            <li>Our website is not intended for individuals under the age of 18, and we do not knowingly collect personal information from children. If you believe that your child has provided us with personal information, please contact us, and we will take appropriate steps to remove such information from our records.</li>
            <li>We may update this Privacy Policy periodically to reflect changes in our practices or legal requirements. We encourage you to review this policy for any updates.</li>
            <li>If you have any questions, concerns, or requests regarding this Privacy Policy or the handling of your personal information, please contact us using the information provided below.

</li>
          </ul>   
        </p>
      </div>

    </div>
    <?php
        include 'footer.php';
  ?>
    <script src="JS/script1.js"></script>


</body>
</html>
