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
        define("GS_SEND_INTERVAL", 5);

        /**
        * Defines the interval in what the e-mails will be sent
        * @const  GS_SEND_INTERVAL
        */    
        define("GS_NUM_MAILS_TO_SEND", 5); // In case you want to send e-mails from/to GMAIL accounts, you must respect the limits specified in this page: https://support.google.com/a/answer/1366776?hl=es

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


        /*
        define(
                "GS_EMAIL_EN_1", 
                "Dear," . GS_BR . GS_BR
                . "I’m writing to express my interest in your customer service position.  Having worked across customer service for several years I feel I would be a valuable asset to your team. I have a wealth of experience when it comes to providing first class service and resolving any queries, complications or issues that might arise with customers." . GS_BR . GS_BR
                . "I also have a consistent track record for meeting targets. During my time at EE I dealt with all initial customer communications by phone, mail and face to face. My number one priority was always the client, and I worked to resolve any and all issues that came their way." . GS_BR . GS_BR
                . "Above all, I love working with people. I’m friendly, sales driven and enjoy developing great rapport with whomever I interact with. I feel I would fit in with your vision, especially given your client-first approach and your favourable reputation within the industry." . GS_BR
                . "I’ve attached my CV for your review. I’d love the opportunity to meet with you and discuss my candidacy further." . GS_BR
                . "Thank you for considering me for the customer service advisor position. I look forward to hearing back from you!"
        );
        
        define(
                "GS_EMAIL_ES_1",
                "Estimado Sr." . GS_BR . GS_BR
                . "Me presento, soy Jaime Landáburu Gómez, director de marketing de NovaProducts." . GS_BR . GS_BR
                . "Me dirijo a Usted para darle a conocer nuestro nuevo sistema de embalaje para cosméticos y productos químicos, sector al que pertenece su compañía." . GS_BR . GS_BR
                . "Adjunto a esta carta encontrará un dossier detallado con las características técnicas de nuestro embalaje, pero déjeme adelantarle que se trata de un revolucionario sistema que le permitirá un notable ahorro de costes manteniendo un nivel de protección y calidad comparable a cualquier otro sistema." . GS_BR
                . "Le invito a que revise la documentación adjunta en un par de minutos, es muy visual y rápida de leer, y que nos haga llegar cualquier duda que tenga." . GS_BR
                . "Sin otro particular, le agradezco su atención." . GS_BR
                . "Reciba un cordial saludo."
        );
        */
    
?>