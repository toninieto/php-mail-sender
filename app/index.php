<?php

    /**
     * When loading this file, the sending mail process is fired
     */
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once dirname(__FILE__) . "/MailSender.php";

    $mailSender = new MailSender();

    $result = $mailSender->sendEmails();
    print GS_BR . "The result is: " . GS_BR . "<pre>";
    print_r( $result );
    print "</pre>";


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
