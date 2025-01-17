<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userEmail = $_POST['user-email'];
    $userQuestion = $_POST['user-question'];

    // Send email to kbbtony@gmail.com
    $to = "kbbtony@gmail.com";
    $subject = "New Question Submitted by User";
    $message = "Email: " . $userEmail . "\n\nQuestion: " . $userQuestion;
    $headers = "From: no-reply@yourwebsite.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
