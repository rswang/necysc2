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
  echo "<script> window.alert("Thanks!");</script>";
  }

?>
