<?php

    /**
     * When loading this file, the sending mail process is fired
     */
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once dirname(__FILE__) . "/MailSender.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Send mails</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="container">  
            <form id="contact" action="" method="post">
                <h3>Send e-mails library</h3>
                <h4>Sends a determined numbers of e-mails, combining different parameters, to a specific account</h4>
                <fieldset>
                    <input placeholder="Your name" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Email Address" type="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
                </fieldset>
                <fieldset>
                    <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>
        </div>
    </body>

</html>



<?php


    $mailSender = new MailSender();

    /*
    $result = $mailSender->sendEmails();
    print GS_BR . "The result is: " . GS_BR . "<pre>";
    print_r( $result );
    print "</pre>";
    */


    /**
     * Exception handling
    */    
    set_exception_handler("exceptionHandler");

    /**
     * Handles the exceptions
     * @param exception $e containing the exception object
     */
    function exceptionHandler($e) {
        print GS_BR . $exceptionMsg["response"];
    }

?>
