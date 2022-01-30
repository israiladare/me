<?php
use Phppot\DataSource;

if (! empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $isDatabase = false;
    if ($isDatabase) {
        require_once __DIR__ . "contact-form/lib/DataSource.php";
        $ds = new DataSource();

        $query = "INSERT INTO tbl_contact (user_name, user_email, subject, message) VALUES (?, ?, ?, ?)";
        $paramType = "ssss";
        $paramArray = array(
            $name,
            $email,
            $subject,
            $message
        );
        $ds->insert($query, $paramType, $paramArray);
    }

    $toEmail = "dareartabefe@gmail.com";
    $mailHeaders = 'From: webmaster@example.com' . "\r\n" . 'Reply-To: ' . $name . '<' . $email . ">\r\n" . 'X-Mailer: PHP/' . phpversion();

    $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";

    // if lines are larger than 70 chars, then should be wrapped
    $message = wordwrap($message, 70, "\r\n");

    // your PHP setup should have configuration to send mail
    $isValidMail = mail($toEmail, $subject, $message, $mailHeaders);
    if ($isValidMail) {
        $displayMessage = "Message sent. Thank you.";
    }
}
require_once __DIR__ . "/contact-form.php";
