<html>
<body>

<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("rswang@mit.edu", $subject,
  $message, "From:" . $email);
  alert "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "       
          <form action="sendemail.php" method="post" enctype="text/plain">
              <div class="form_field">
                  <label for="name">Name:</label>
                  <input type="text" name="name" value="" class="text-field"/>
              </div>
              <div class="form_field">
                  <label for="email">Email:</label>
                  <input type="text" name="email" value="" class="text-field"/>
              </div>
              <div class="form_field">
                  <label for="message">Message:</label>
                  <textarea  name="message" maxlength="1000" cols="25" rows="6"></textarea>
              </div>
              <div class="form_field">
                  <input type = "submit" value="Send" id = "submit">
              </div>
          </form>
        ";
  }
?>

</body>
</html>