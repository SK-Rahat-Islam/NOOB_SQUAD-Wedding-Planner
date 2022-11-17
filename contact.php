<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db');

if (isset($_POST['send'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$plan = $_POST['plan'];
$address = $_POST['address'];
$message = $_POST['message'];

$insert = "INSERT INTO 'contact_form'('name', 'email', 'number', 'plan', 'address', 'message') VALUES ('$name','$email','$number','$plan','$address','$message')";

mysqli_query($conn, $insert);

header('location:contact.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>contact</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

<?php @include 'header.php'; ?>

<section class="contact">

<h1 class="heading">contact us</h1>

<form action="" method="post">

<div class="flex">

<div class="inputBox">
<span><b>Name</b></span>
<input type="text" placeholder="Enter Your Name" name="name" required>
</div>

<div class="inputBox">
<span><b>Email</b></span>
<input type="email" placeholder="Enter Your Email" name="email" required>
</div>

<div class="inputBox">
<span><b>Mobile Number</b></span>
<input type="number" placeholder="Enter Your Phone Number" name="number" required>
</div>

<div class="inputBox">
<span><b>Choose a Plan</b></span>
<select name="plan">
<option value="basic">Basic</option>
<option value="premium">Premium</option>
<option value="ultimate">Ultimate Plan</option>
</select>
</div>

<div class="inputBox">
<span><b>Address</b></span>
<textarea name="address" placeholder="Enter Your Address" required cols="30" rows="10"></textarea>
</div>

<div class="inputBox">
<span><b>Message</b></span>
<textarea name="message" placeholder="Enter Your Message" required cols="30" rows="10"></textarea>
</div>

</div>

<input type="submit" value="Send message" name="Send" class="btn">

</form>

</section>

<?php @include 'footer.php'; ?>

</div>
</body>

</html>