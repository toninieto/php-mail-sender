<?php

    /**
     * We set the required php configuration
     */    
    ini_set( 'display_errors', 1 );
    ini_set( 'display_startup_errors', 1 );
    error_reporting( E_ALL );
    ini_set( "max_execution_time", 0 );


    /** 
     * In this file we will define every general setting related to the application
     * GS_ -> General Settings options
     * EM_ -> Emails constants
     */


    /**
    * GENERAL SETTINGS
    */    

        /**
        * Defines if the sending emails is enabled or not. If not, every parts of the process will be executed, except the sending of the mails. This property is useful for debugging
        * @const  GS_SEND_EMAILS_ENABLED
        */    
        define("GS_SEND_EMAILS_ENABLED", true);

        /**
        * Defines the destination address where the emails will be sent
        * @const  GS_DESTINATION_ADDRESS
        */    
        define("GS_FROM_ADDRESS", "FROM@EMAIL.COM");

        /**
        * Defines the destination address where the emails will be sent
        * @const  GS_DESTINATION_ADDRESS
        */    
        define("GS_FROM_REPLYTO", "FROM@EMAIL.COM");



        /**
        * Defines the destination address where the emails will be sent
        * @const  GS_DESTINATION_ADDRESS
        */    
        define("GS_FROM_NAME", "Toni");

        /**
        * Defines the destination address where the emails will be sent
        * @const  GS_DESTINATION_ADDRESS
        */    
        define("GS_DESTINATION_ADDRESS", "TO@EMAIL.COM");

        /**
        * Defines the interval in what the e-mails will be sent
        * @const  GS_SEND_INTERVAL
        */    
        define("GS_HTML_FORMAT", true);

        /**
        * Defines the interval in what the e-mails will be sent
        * @const  GS_SEND_INTERVAL
        */    
        define("GS_SEND_INTERVAL", 1);

        /**
        * Defines the interval in what the e-mails will be sent
        * @const  GS_SEND_INTERVAL
        */    
        define("GS_NUM_MAILS_TO_SEND", 2); // In case you want to send e-mails from/to GMAIL accounts, you must respect the limits specified in this page: https://support.google.com/a/answer/1366776?hl=es

        /**
        * Defines the smtp server
        * @const  GS_SMTP_SERVER
        */    
        define("GS_SMTP_SERVER", "SMTP.GMAIL.COM");

        /**
        * Defines the smtp port
        * @const  GS_SMTP_PORT
        */    
        define("GS_SMTP_PORT", 465);

        /**
        * Defines the smtp port
        * @const  GS_SMTP_PORT
        */    
        define("GS_SMTP_SECURE", "ssl");

        /**
        * Defines the smtp port
        * @const  GS_SMTP_PORT
        */    
        define("GS_SMTP_DEBUG", 0);

        /**
        * Defines the smtp port
        * @const  GS_SMTP_PORT
        */    
        define("GS_SMTP_AUTH", true);

        /**
        * Defines the smtp user
        * @const  GS_SMTP_USER
        */    
        define("GS_SMTP_USER", "TONI@TRESIPUNT.COM");

        /**
        * Defines the smtp user
        * @const  GS_DESTINATION_ADDRESS
        */    
        define("GS_SMTP_PASSWORD", "");


        /**
        * Defines the destination address where the emails will be sent
        * @const  GS_DESTINATION_ADDRESS
        */    
        define("GS_BR", "<br />");
        
        /**
        * Defines the destination address where the emails will be sent
        * @const  GS_DESTINATION_ADDRESS
        */    
        define("GS_ATTACHMENT_PATH", "../opt/attachments");

        

    /**
    * EMAILS
    */

        /**
        * Defines the destination address where the emails will be sent
        * @const  GS_DESTINATION_ADDRESS
        */    
        define("EM_BODIES_PATH", "../opt/email_bodies");


        /**
        * Defines the languages in what we would have the emailings
        * @const  $GLOBALS["EM_LANGS"]
        */    
        $GLOBALS["EM_LANGS"] = array(
                                        "EN" => "EN", // English
                                        "ES" => "ES", // Spanish
                                        "CA" => "CA"  // Catalan
                               );

        // We define the different subjects
        $GLOBALS["EM_SUBJECT"] = array();
        $GLOBALS["EM_SUBJECT"][ $GLOBALS["EM_LANGS"]["EN"] ] = array( // English
                                                                  0 => "Bad service complaint",
                                                                  1 => "Request Inquiry request",
                                                                  2 => "Contact recovery",
                                                                  3 => "Sending information",
                                                                  4 => "Considerations about your application"
                                                                );

        $GLOBALS["EM_SUBJECT"][ $GLOBALS["EM_LANGS"]["ES"] ] = array( // Spanish
                                                                  0 => "Reclamación por mal servicio",
                                                                  1 => "Consulta incidencia pedido",
                                                                  2 => "Recuperación de contacto",
                                                                  3 => "Envío de información",
                                                                  4 => "Consideraciones acerca de su solicitud"
                                                                );

        $GLOBALS["EM_SUBJECT"][ $GLOBALS["EM_LANGS"]["CA"] ] = array( // Catalan
                                                                  0 => "Reclamació per mal servei",
                                                                  1 => "Consulta incidència comanda",
                                                                  2 => "Recuperació de contacte",
                                                                  3 => "Enviament d'informació",
                                                                  4 => "Consideracions respecte la seva sol·licitud"
                                                                );


        // We define the different bodies. We load them from files placed by default in the opt folder
        // English        
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["EN"] ][0] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["EN"] . "/body0.txt" ), true ) );
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["EN"] ][1] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["EN"] . "/body1.txt" ), true ) );
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["EN"] ][2] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["EN"] . "/body2.txt" ), true ) );
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["EN"] ][3] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["EN"] . "/body3.txt" ), true ) );
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["EN"] ][4] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["EN"] . "/body4.txt" ), true ) );

        // Spanish
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["ES"] ][0] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["ES"] . "/body0.txt" ), true ) );
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["ES"] ][1] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["ES"] . "/body1.txt" ), true ) );
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["ES"] ][2] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["ES"] . "/body2.txt" ), true ) );
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["ES"] ][3] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["ES"] . "/body3.txt" ), true ) );
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["ES"] ][4] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["ES"] . "/body4.txt" ), true ) );

        // Catalan
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["CA"] ][0] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["CA"] . "/body0.txt" ), true ) );
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["CA"] ][1] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["CA"] . "/body1.txt" ), true ) );
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["CA"] ][2] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["CA"] . "/body2.txt" ), true ) );
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["CA"] ][3] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["CA"] . "/body3.txt" ), true ) );
        $GLOBALS["EM_BODY"][ $GLOBALS["EM_LANGS"]["CA"] ][4] = nl2br( file_get_contents( realpath( EM_BODIES_PATH . "/" . $GLOBALS["EM_LANGS"]["CA"] . "/body4.txt" ), true ) );

?>