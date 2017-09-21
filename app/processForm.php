<?php

    /**
     * When loading this file, the sending mail process is fired
     */
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once dirname(__FILE__) . "/MailSender.php";
    require_once dirname(__FILE__) . "/config.php";


    $fromAddress = "";
    if ( isset($_POST["fromaddress"]) && trim($_POST["fromaddress"]) !== "" ) {
        $fromAddress = $_POST["fromaddress"];
    }

    $replytoAddress = "";
    if ( isset($_POST["replytoaddress"]) && trim($_POST["replytoaddress"]) !== "" ) {
        $replytoAddress = $_POST["replytoaddress"];
    }

    $fromName = "";
    if ( isset($_POST["fromname"]) && trim($_POST["fromname"]) !== "" ) {
        $fromName = $_POST["fromname"];
    }

    $destinationAddress = "";
    if ( isset($_POST["destinationaddress"]) && trim($_POST["destinationaddress"]) !== "" ) {
        $destinationAddress = $_POST["destinationaddress"];
    }

    $numEmails = "";
    if ( isset($_POST["numemails"]) && trim($_POST["numemails"]) !== "" ) {
        $numEmails = $_POST["numemails"];
    }

    $interval = "";
    if ( isset($_POST["interval"]) && trim($_POST["interval"]) !== "" ) {
        $interval = $_POST["interval"];
    }

    $server = "";
    if ( isset($_POST["server"]) && trim($_POST["server"]) !== "" ) {
        $server = $_POST["server"];
    }

    $port = "";
    if ( isset($_POST["port"]) && trim($_POST["port"]) !== "" ) {
        $port = $_POST["port"];
    }

    $user = "";
    if ( isset($_POST["user"]) && trim($_POST["user"]) !== "" ) {
        $user = $_POST["user"];
    }
    
    $password = "";
    if ( isset($_POST["password"]) && trim($_POST["password"]) !== "" ) {
        $password = $_POST["password"];
    }
    

    $mailSender = new MailSender( $fromAddress, $replytoAddress, $fromName, $destinationAddress, $numEmails, $interval, $server, $port, $user, $password );

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
