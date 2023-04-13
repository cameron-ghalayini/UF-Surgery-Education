<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Do something with the data, like store it in a database or send it in an email
// ...

// Redirect to a thank you page
header('Location: thank-you.html');
exit;
?>
