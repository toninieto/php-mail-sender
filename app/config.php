<?php

    /** 
     * In this file we will define every general setting related to the application
     * GES_ -> General Settings constants
     * EML -> Emails constants
     */

    /**
    * GENERAL SETTINGS
    */    

        /**
        * Defines the destination address where the emails will be sent
        * @const  GES_DESTINATION_ADDRESS
        */    
        define("GES_FROM_ADDRESS", "TONI@TRESIPUNT.COM");

        /**
        * Defines the destination address where the emails will be sent
        * @const  GES_DESTINATION_ADDRESS
        */    
        define("GES_FROM_REPLYTO", "TONI@TRESIPUNT.COM");



        /**
        * Defines the destination address where the emails will be sent
        * @const  GES_DESTINATION_ADDRESS
        */    
        define("GES_FROM_NAME", "Toni");

        /**
        * Defines the destination address where the emails will be sent
        * @const  GES_DESTINATION_ADDRESS
        */    
        define("GES_DESTINATION_ADDRESS", "DESARROLLO4.IECISA@GMAIL.COM");

        /**
        * Defines the interval in what the e-mails will be sent
        * @const  GES_SEND_INTERVAL
        */    
        define("GES_HTML_FORMAT", true);

        /**
        * Defines the interval in what the e-mails will be sent
        * @const  GES_SEND_INTERVAL
        */    
        define("GES_SEND_INTERVAL", "2");

        /**
        * Defines the smtp server
        * @const  GES_SMTP_SERVER
        */    
        define("GES_SMTP_SERVER", "SMTP.GMAIL.COM");

        /**
        * Defines the smtp port
        * @const  GES_SMTP_PORT
        */    
        define("GES_SMTP_PORT", "465");

        /**
        * Defines the smtp port
        * @const  GES_SMTP_PORT
        */    
        define("GES_SMTP_SECURE", "ssl");

        /**
        * Defines the smtp port
        * @const  GES_SMTP_PORT
        */    
        define("GES_SMTP_DEBUG", 1);

        /**
        * Defines the smtp port
        * @const  GES_SMTP_PORT
        */    
        define("GES_SMTP_AUTH", true);

        /**
        * Defines the smtp user
        * @const  GES_SMTP_USER
        */    
        define("GES_SMTP_USER", "TONI@TRESIPUNT.COM");

        /**
        * Defines the smtp user
        * @const  GES_DESTINATION_ADDRESS
        */    
        define("GES_SMTP_PASSWORD", "");


    /**
    * EMAILS
    */    

        /**
        * Defines the destination address where the emails will be sent
        * @const  GES_DESTINATION_ADDRESS
        */    
        define("GES_EMAIL_BR", "<br />");
        

        $GLOBALS["GES_EMAILS"] = array(
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
                "GES_EMAIL_EN_1", 
                "Dear," . GES_EMAIL_BR . GES_EMAIL_BR
                . "I’m writing to express my interest in your customer service position.  Having worked across customer service for several years I feel I would be a valuable asset to your team. I have a wealth of experience when it comes to providing first class service and resolving any queries, complications or issues that might arise with customers." . GES_EMAIL_BR . GES_EMAIL_BR
                . "I also have a consistent track record for meeting targets. During my time at EE I dealt with all initial customer communications by phone, mail and face to face. My number one priority was always the client, and I worked to resolve any and all issues that came their way." . GES_EMAIL_BR . GES_EMAIL_BR
                . "Above all, I love working with people. I’m friendly, sales driven and enjoy developing great rapport with whomever I interact with. I feel I would fit in with your vision, especially given your client-first approach and your favourable reputation within the industry." . GES_EMAIL_BR
                . "I’ve attached my CV for your review. I’d love the opportunity to meet with you and discuss my candidacy further." . GES_EMAIL_BR
                . "Thank you for considering me for the customer service advisor position. I look forward to hearing back from you!"
        );
        
        define(
                "GES_EMAIL_ES_1",
                "Estimado Sr." . GES_EMAIL_BR . GES_EMAIL_BR
                . "Me presento, soy Jaime Landáburu Gómez, director de marketing de NovaProducts." . GES_EMAIL_BR . GES_EMAIL_BR
                . "Me dirijo a Usted para darle a conocer nuestro nuevo sistema de embalaje para cosméticos y productos químicos, sector al que pertenece su compañía." . GES_EMAIL_BR . GES_EMAIL_BR
                . "Adjunto a esta carta encontrará un dossier detallado con las características técnicas de nuestro embalaje, pero déjeme adelantarle que se trata de un revolucionario sistema que le permitirá un notable ahorro de costes manteniendo un nivel de protección y calidad comparable a cualquier otro sistema." . GES_EMAIL_BR
                . "Le invito a que revise la documentación adjunta en un par de minutos, es muy visual y rápida de leer, y que nos haga llegar cualquier duda que tenga." . GES_EMAIL_BR
                . "Sin otro particular, le agradezco su atención." . GES_EMAIL_BR
                . "Reciba un cordial saludo."
        );
        */
    
?>