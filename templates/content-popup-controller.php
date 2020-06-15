<?php
/**
 * All backend code for the email form
 *
 * @package     Form controller
 * @author      Marko <upss070288@gmail.com>
 * @version     1.0
 * @license     GPL-3.0-or-later
 * @copyright   © 2020 M Lab Studio
 *
 * @param string $productName       Return hidden input product name from the form
 * @param string $message           Return input message from the form
 * @param string $firstName         Return input first name from the form
 * @param string $lastName          Return input last name from the form
 * @param string $email             Return input email from the form
 *
 */

$woocommerce_negotiation = new WoocommerceNegotiation();

if (isset($_POST['contactSubmit'])) {
    $firstName      = $_POST['firstName'];
    $lastName       = $_POST['lastName'];
    $email          = $_POST['email'];
    $message        = $_POST['message'];
    $productName    = $_POST['productName'];

    $to             = 'test@test.com'; // Set the desired email address
    $subject        = $productName;

    $body           = $woocommerce_negotiation->emailTemplate($productName, $message, $firstName, $lastName);

    $headers        = "From: " . $email . "\r\n";
    $headers        .= "Reply-To: ". $email . "\r\n";
    $headers        .= "MIME-Version: 1.0\r\n";
    $headers        .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    if (wp_mail( $to, $subject, $body, $headers )) {
        echo '<div class="contactSuccess">Your message is successfully send.</div>';
    } else {
        echo '<div class="contactFailed">Something is wrong. Please try again.</div>';
    }
}