<?php
require_once 'conn.php'; // import the database credentials



// Retrieve the form data using the $_POST superglobal
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$language = $_POST['language'];
$zip = $_POST['zip'];
$about = $_POST['about'];

// Insert the form data into the 'users' table
$insert_query = "INSERT INTO users (name, email, password, phoneNumber, gender, language, zipCode, about) VALUES ('$name', '$email', '$password', '$phone', '$gender', '$language', '$zip', '$about')";
if (!mysqli_query($conn, $insert_query)) {
  die('Error: ' . mysqli_error($connection));
}

// Close the MySQL connection
mysqli_close($conn);

// Redirect the user to a confirmation page
header('Location: index.php');
exit;
?>