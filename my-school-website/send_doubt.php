<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doubt = $_POST["doubt"];
    $to = "patilamit5281@gmail.com"; // Change this to your email address
    $subject = "New Doubt";
    $message = $doubt;
    $headers = "From: patilamit5281@gmail.com"; // Change this to a valid email address

    if (mail($to, $subject, $message, $headers)) {
        echo "Doubt sent successfully!";
    } else {
        echo "Failed to send doubt.";
    }
}
?>
