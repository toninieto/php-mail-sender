<?php

    /**
     * This is the main application file
     */
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once dirname(__FILE__) . "/MailSender.php";

    $mailSender = new MailSender();

    $result = $mailSender->sendEmails();
    print GES_EMAIL_BR . "The result is: " . GES_EMAIL_BR;
    var_dump( $result );



    /**
     * Exception handling
    */    
    set_exception_handler("exceptionHandler");

    /**
     * Handles the exceptions
     * @param exception $e containing the exception object
     */
    function exceptionHandler($e)
    {
        print GES_EMAIL_BR . $exceptionMsg["response"];
    }

?>
