<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name  $_POST["name"]
$email  $_POST["email"]
$message  $_POST["message"]

echo "Name: " . $name . "<br>";
echo "email: " . $email . "<br>";
echo "message: " . $message . "<br>";
}
?>
