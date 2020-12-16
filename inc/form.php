<?php
$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$telephone = filter_input(INPUT_POST, "telephone", FILTER_SANITIZE_NUMBER_INT);
$subject= filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);
$marketPref= filter_input(INPUT_POST, "marketPref");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($name)) {
        $name_error = "require";
    } else {
        $name_error = "";
    }
    if (empty($email)) {
        $email_error = "require";
    } else {
        $email_error = "";
    }
    if (empty($telephone)) {
        $telephone_error = "require";
    } else {
        $telephone_error = "";
    }
    if (empty($subject)) {
        $subject_error = "require";
    } else {
        $subject_error = "";
    }
    if (empty($message)) {
        $message_error = "require";
    } else {
        $message_error = "";
    }
}