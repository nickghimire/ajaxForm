<?php
// Fetching Values From URL
$name2 = $_POST['name'];
$email2 = $_POST['email'];
$password2 = $_POST['password'];
$contact2 = $_POST['contact'];
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("db_admin", $connection); // Selecting Database
if (isset($_POST['name'])) {
$query = mysql_query("insert into form_element (name, email, password, contact) values ('$name2', '$email2', '$password2','$contact2')"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed
?>