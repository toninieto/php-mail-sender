<?php

    /** 
     * In this file we will define every general setting related to the application
     * GS_ -> General Settings constants
     * EML -> Emails constants
     */

    /**
    * GENERAL SETTINGS
    */    

        /**
        * Defines if the sending emails is enabled or not. If not, every parts of the process will be executed, except the sending of the mails. This property is useful for debugging
        * @const  GS_SEND_EMAILS_ENABLED
        */    
        define("GS_SEND_EMAILS_ENABLED", false);

        /**
        * Defines the destination address where the emails will be sent
        * @const  GS_DESTINATION_ADDRESS
        */    
        define("GS_FROM_ADDRESS", "TONI@TRESIPUNT.COM");

        /**
        * Defines the destination address where the emails will be sent
        * @const  GS_DESTINATION_ADDRESS
        */    
        define("GS_FROM_REPLYTO", "TONI@TRESIPUNT.COM");



        /**
        * Defines the destination address where the emails will be sent
        * @const  GS_DESTINATION_ADDRESS
        */    
        define("GS_FROM_NAME", "Toni");

        /**
        * Defines the destination address where the emails will be sent
        * @const  GS_DESTINATION_ADDRESS
        */    
        define("GS_DESTINATION_ADDRESS", "DESARROLLO4.IECISA@GMAIL.COM");

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

        /*
        $GLOBALS["EM_EMAILS"] = array(
                                        "en" => array( // English e-mails
                                                        "subject" => array(
                                                                              0 => "Subject 1",
                                                                              1 => "Subject 2",
                                                                              2 => "Subject 3",
                                                                              3 => "Subject 4",
                                                                              4 => "Subject 5"
                                                                            ),
                                                        "body"   => array(
                                                                              0 => "Body 1",
                                                                              1 => "Body 2",
                                                                              2 => "Body 3",
                                                                              3 => "Body 4",
                                                                              4 => "Body 5"
                                                                         )
                                                     ),
                                        "es" => array( // Spanish e-mails
                                                        "subject" => array(
                                                                              0 => "Asunto 1",
                                                                              1 => "Asunto 2",
                                                                              2 => "Asunto 3",
                                                                              3 => "Asunto 4",
                                                                              4 => "Asunto 5"
                                                                            ),
                                                        "body"   => array(
                                                                              0 => "Cuerpo 1",
                                                                              1 => "Cuerpo 2",
                                                                              2 => "Cuerpo 3",
                                                                              3 => "Cuerpo 4",
                                                                              4 => "Cuerpo 5"
                                                                         )
                                                     ),
                                        "ca" => array( // Catalan e-mails
                                                        "subject" => array(
                                                                              0 => "Tema 1",
                                                                              1 => "Tema 2",
                                                                              2 => "Tema 3",
                                                                              3 => "Tema 4",
                                                                              4 => "Tema 5"
                                                                            ),
                                                        "body"   => array(
                                                                              0 => "Contingut 1",
                                                                              1 => "Contingut 2",
                                                                              2 => "Contingut 3",
                                                                              3 => "Contingut 4",
                                                                              4 => "Contingut 5"
                                                                         )
                                                     )
                                      );
    */


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
                                                                  0 => "Subject 1",
                                                                  1 => "Subject 2",
                                                                  2 => "Subject 3",
                                                                  3 => "Subject 4",
                                                                  4 => "Subject 5"
                                                                );

        $GLOBALS["EM_SUBJECT"][ $GLOBALS["EM_LANGS"]["ES"] ] = array( // Spanish
                                                                  0 => "Asunto 1",
                                                                  1 => "Asunto 2",
                                                                  2 => "Asunto 3",
                                                                  3 => "Asunto 4",
                                                                  4 => "Asunto 5"
                                                                );

        $GLOBALS["EM_SUBJECT"][ $GLOBALS["EM_LANGS"]["CA"] ] = array( // Catalan
                                                                  0 => "Tema 1",
                                                                  1 => "Tema 2",
                                                                  2 => "Tema 3",
                                                                  3 => "Tema 4",
                                                                  4 => "Tema 5"
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