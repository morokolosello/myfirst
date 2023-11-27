<?php
// Retrieve form data
$name = $_POST['item_meta[80]'];
$email = $_POST['item_meta[81]'];
$phone = $_POST['item_meta[82]'];
$county = $_POST['item_meta[83]'];
$message = $_POST['item_meta[84]'];

// Validate the data (add your own validation logic here)

// Compose the email message
$to = "info@mosagroup.co.za"; // Change this to the recipient's email address
$subject = "Contact Form Submission";
$message = "Name: $name\nEmail: $email\nPhone: $phone\nCounty: $county\n\n$message";

// Send the email
mail($to, $subject, $message);

// Redirect back to a thank-you page or wherever you want
header("Location: thank_you.html");
?>
