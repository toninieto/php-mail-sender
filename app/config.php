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
                                                                  0 => "US GDP beats forecasts with 3% growth, as markets recover from Korea shock - as it happened",
                                                                  1 => "Sterling and markets calm ahead of Jackson Hole bankers meeting - as it happened",
                                                                  2 => "Pound edges up as UK economy grows by 0.3% in second quarter - as it happened",
                                                                  3 => "UK public finances see first July surplus since 2002 – as it happened",
                                                                  4 => "Euro slides on ECB currency concerns - as it happened",
                                                                  5 => "UK wages grow by better than expected 2.1% – as it happened",
                                                                  6 => "UK CPI inflation unexpectedly holds steady at 2.6% in July - as it happened",
                                                                  7 => "Markets move higher as Japanese growth beats forecasts, but EU data disappoints - as it happened",
                                                                  8 => "Eurozone grows twice as fast as UK after GDP rises by 0.6% - as it happened",
                                                                  9 => "Eurozone economy grows twice as fast as UK's, figures show",
                                                                  10 => "Greece launches first bond sale since 2014, as IMF cuts UK growth forecasts - business live",
                                                                  11 => "Greece plans return to bond market as Athens sees end in sight to austerity",
                                                                  12 => "UK trade deficit swells and industrial output falls, but US creates 222,000 new jobs - as it happened",
                                                                  13 => "UK business confidence at lowest point for six years, say forecasters",
                                                                  14 => "Pound falls against euro after ECB meeting; Fathom warns of UK recession - as it happened",
                                                                  15 => "Creditors agree terms to disburse Greece's €8.5bn bailout funds",
                                                                  16 => "Greek bailout funds on the cards as creditors narrow differences",
                                                                  17 => "US jobs figures come in well below expectations, knocking markets off highs - as it happened",
                                                                  18 => "Federal Reserve leaves rate on hold, as UK construction and eurozone growth pick up - as it happened",
                                                                  19 => "Pound surges but Footsie loses £46bn as UK heads to the polls – as it happened",
                                                                  20 => "UK inflation steady at 2.3% in March - as it happened",
                                                                  21 => "US jobs growth much worse than expected; Greece and EU creditors agree deal - as it happened",
                                                                  22 => "Bank of England deputy governor 'must resign' over code of conduct breach - as it happened",
                                                                  23 => "Euro rises as ECB president Draghi says single currency is 'irrevocable'- as it happened",
                                                                  24 => "Stocks rise but dollar slides after Federal Reserve raises US interest rates - as it happened",
                                                                  25 => "Markets cautious after crucial US healthcare vote delayed - as it happened",
                                                                  26 => "European commission upgrades growth forecast for UK economy",
                                                                  27 => "Calling the latest Greek deal a sticking plaster does disrespect to the Elastoplast",
                                                                  28 => "No crisis on Greece bailout deal, says eurozone chief",
                                                                  29 => "Opportunity knocks for Europe’s youngsters – as long as they live in the right place
"
                                                                );

        $GLOBALS["EM_SUBJECT"][ $GLOBALS["EM_LANGS"]["ES"] ] = array( // Spanish
                                                                  0 => "El Ibex 35 recupera los 10.200 puntos con la tregua del euro",
                                                                  1 => "BBVA coloca 1.500 millones en su primera emisión de deuda senior non-preferred",
                                                                  2 => "El PIB de Estados Unidos crece un 3% en el segundo trimestre",
                                                                  3 => "Telefónica inyectará 1.243 millones para capitalizar su filial en Colombia",
                                                                  4 => "Se dispara la compra de suelo para nuevas viviendas",
                                                                  5 => "Moody's eleva su previsión de crecimiento económico para la zona euro al 2,1% para 2017",
                                                                  6 => "Gestamp corta la caída tras perder el precio de la salida a Bolsa",
                                                                  7 => "Los sindicatos de Aena aplazan la convocatoria de huelga en los aeropuertos",
                                                                  8 => "El fondo TCI reduce su participación en REE por debajo del 2%",
                                                                  9 => "Movistar permitirá cargar a la factura del móvil las compras en App Store y iTunes",
                                                                  10 => "El Corte Inglés iniciará este viernes la venta de coches de Tesla en Lisboa",
                                                                  11 => "Deutsche Bank dice que la capacidad de los bancos de generar capital sigue siendo débil",
                                                                  12 => "Alemania aprueba un plan para lograr la formación de 3 millones de trabajadores cualificados hasta 2030",
                                                                  13 => "Amazon y Microsoft, aliados en asistentes inteligentes",
                                                                  14 => "La confianza económica de la zona euro aumenta en agosto hasta máximos precrisis",
                                                                  15 => "Eurowings ofrece 600 nuevos puestos de trabajo para Alemania, Austria y España",
                                                                  16 => "Sabadell encarga a Lazard que explore la venta de su gestora hotelera",
                                                                  17 => "Bodegas Bilbaínas gana 2,4 millones en 2017 y eleva sus ventas un 8%",
                                                                  18 => "United Technologies ultima la compra de Rockwell Collins por 22.500 millones de dólares",
                                                                  19 => "La Junta de Andalucía multa a Unicaja con 3,1 millones por cláusulas abusivas en hipotecas",
                                                                  20 => "United Technologies ultima la compra de Rockwell Collins por 22.500 millones de dólares",
                                                                  21 => "La Junta de Andalucía multa a Unicaja con 3,1 millones por cláusulas abusivas en hipotecas",
                                                                  22 => "El fondo TCI reduce su participación en REE por debajo del 2%",
                                                                  23 => "Funespaña recorta un 8% su beneficio semestral, hasta 3,41 millones",
                                                                  24 => "Berkeley firma la financiación de hasta 100 millones para el proyecto de mina de Retortillo (Salamanca)",
                                                                  25 => "La china Fosun International gana un 33,6% más en el primer semestre",
                                                                  26 => "EEUU revisa tres décimas al alza el crecimiento de su economía en el segundo trimestre, hasta el 3%",
                                                                  27 => "La inflación interanual de Alemania alcanza el 1,8% en agosto",
                                                                  28 => "El comercio internacional del G20 crece por quinto trimestre consecutivo pero a un ritmo más lento",
                                                                  29 => "El PIB de Francia crece al 0,5% entre abril y junio, y encadena tres trimestres creciendo a este nivel"
                                                                );

        $GLOBALS["EM_SUBJECT"][ $GLOBALS["EM_LANGS"]["CA"] ] = array( // Catalan
                                                                  0 => "L'IPC puja una dècima a l'agost, fins a l'1,6%",
                                                                  1 => "L'euro escala a màxims des del 2015 i s'aproxima a 1,20 dòlars",
                                                                  2 => "La venda de vivendes creix l'11% en un any i els preus pugen el 4,4%",
                                                                  3 => "Iberdrola crea l'elèctrica més gran de l'Amèrica Llatina",
                                                                  4 => "La Seguretat Social ingressa per primer cop més de 10.000 milions d'euros",
                                                                  5 => "L'euro assoleix el seu màxim des del 2015 i supera el nivell dels 1,20 dòlars",
                                                                  6 => "Creen un nou complement salarial per als professors de les escoles concertades",
                                                                  7 => "Portugal ja ha retornat el 63 % del crèdit del rescat financer del 2011",
                                                                  8 => "El consum privat dóna un nou impuls al creixement de l'economia",
                                                                  9 => "La despesa en les pensions creix el 3% a l'agost, finsals 8.790,6 milions d'euros",
                                                                  10 => "El Corte Inglés es fusionarà amb la seva filial Hipercor per estalviar-se despeses",
                                                                  11 => "El que diu la llei de transitorietat sobre pensions, impostos i deute",
                                                                  12 => "Fer de turista als Estats Units, més barat gràcies a l'euro",
                                                                  13 => "El que Europa obligarà a fer als bancs per evitar escàndols com les preferents",
                                                                  14 => "L’euro supera els 1,20 dòlars per primera vegada des de gener del 2015",
                                                                  15 => "Google s'associa amb Walmart per competir amb Amazon",
                                                                  16 => "Desenvolupen un innovador sistema per protegir les empreses dels ciberatacs",
                                                                  17 => "Facebook llança Marketplace, la competència de Wallapop",
                                                                  18 => "La fibra òptica, a punt de superar l'ADSL a Espanya",
                                                                  19 => "Facebook llança Watch per competir amb Youtube i Netflix",
                                                                  20 => "¿Desconnectem del mòbil per vacances?",
                                                                  21 => "Els 'gadgets' que no poden faltar per vacances"
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