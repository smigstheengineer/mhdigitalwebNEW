<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $from = 'name';
  $to = 'miguel@mhdigitalweb.com';
  $subject = 'Request for Consultation';

  $body = "From: $name\n E-Mail: $email\n Message:\n $message";


          if ($_POST['submit']) {
           if (mail ($to, $subject, $body, $from)) {
           echo '<div>Message Sent Successfully! <a class="button" href="https://mhdigitalweb.com">Back to MHDigitalWeb</a></div>';
           } else {
           echo '<p>Ah! Try again, please?</p>';
           }
       }


?>


              

