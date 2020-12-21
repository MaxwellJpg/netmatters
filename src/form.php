<?php

$alert_message = "";
$alerts = [];
$alert_cat = 'fail';

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$telephone = filter_input(INPUT_POST, "telephone", FILTER_SANITIZE_NUMBER_INT);
$subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);
$marketPref = filter_input(INPUT_POST, "marketing_preference");

//Checks if inputs are filled
//if not > return 'require' to add as class name
try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //NAME
        if (empty($name)) {
            $name_error = "require";
        } else {
            $name_error = "";
        }

        //EMAIL
        if (empty($email)) {
            $email_error = "require";
        } else {
            $email_error = "";
        }

        //TELEPHONE
        //error message for telephone input
        if (empty($telephone)) {
            $telephone_error = "require";
        } elseif (
            strlen($telephone) < 10
            || strlen($telephone) > 20
            || !is_numeric($telephone)
        ) {
            $telephone_error = "require";
            $alerts[] = "Please enter a valid telephone number";
        } else {
            $telephone_error = "";
        }

        //SUBJECT
        if (empty($subject)) {
            $subject_error = "require";
        } else {
            $subject_error = "";
        }
        //MESSAGE
        //error message for message input
        if (empty($message)) {
            $message_error = "require";
        } elseif (str_word_count($message) < 5) {
            $telephone_error = "require";
            $alerts[] = "Message must be at least 5 words";
        } else {
            $message_error = "";
        }

        //MARKET PREFRENCE
        if (empty($marketPref)) {
            $marketPref = 0;
        }

        //INPUT VARS INTO DB
        if (
            empty($name_error) && empty($email_error) && empty($telephone_error)
            && empty($subject_error) && empty($message_error)
        ) {
            include_once('src/connection.php');

            $stmt = $conn->prepare(
                "INSERT INTO `contact_us_details` 
                (name, email, telephone, subject, message, market_preference) 
                VALUES 
                ('$name', '$email', '$telephone',
                '$subject', '$message', '$marketPref')"
            );

            $result = $stmt->execute();

            if ($result) {
                $alerts = [];
                $alert_cat = 'success';
                $alerts[] = "Your message has been sent!";
                $name = $email = $telephone = $subject = $message = $marketPref = '';
            } else {
                $alerts = [];
                $alerts[] = "Your message has failed to send!";
            }
        }

        if (count($alerts)) {
            foreach ($alerts as $mess) {
                $alert_message .= '
                <div class="alert alert-' . $alert_cat . '">
                ' . $mess . '
                <button type="button" class="close">×</button>
                </div>';
            }
        }
    }
} catch (PDOException $e) {
    $conn = null;
    $stmt = null;
    die($e->getMessage());
}
