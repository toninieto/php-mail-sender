<?php

    // We include all required files
    require_once dirname(__FILE__).'/vendor/autoload.php';
    require_once dirname(__FILE__).'/config.php';

    /**
     * The class MailSender contains the required methods for to send the e-mails to the destination address
     */
    class MailSender {

        /**
         * The class constructor
         */
        public function __construct() {
            
        }
        

        /**
         * This function gets a random language from all the languages available
         */
        public function getRandomLang() {
            return array_rand( $GLOBALS["EM_EMAILS"], 1 );
        }


        /**
         * This function gets a subject and a body for the mail in a random language
         */
        public function getRandomEmailText() {

            $mailText = array();

            // For every e-mail, we get a random lang
            $lang = $this->getRandomLang();

            // Given a random lang code, we get the number of subjects and bodies available
            $numSubjects = count( $GLOBALS["EM_EMAILS"][$lang]["subject"] ) - 1;
            $numBodies = count( $GLOBALS["EM_EMAILS"][$lang]["body"] ) - 1;

            // We build the e-mail text
            $mailText["subject"] = $GLOBALS["EM_EMAILS"][$lang]["subject"][ mt_rand(0, $numSubjects) ];
            $mailText["body"]    = $GLOBALS["EM_EMAILS"][$lang]["body"][ mt_rand(0, $numBodies) ];

            return $mailText;

        }

        /**
         * This function sends the individual mails
         */
        public function sendEmail() {

            $result = array();
            $result["result"] = false;
            $result["response"] = "";

            // We define all the php mailer required parameters for to send the e-mails
            $mail = new PHPMailer(); // create a new object
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = GS_SMTP_DEBUG; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = GS_SMTP_AUTH; // authentication enabled
            $mail->SMTPSecure = GS_SMTP_SECURE; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = GS_SMTP_SERVER;
            $mail->Port = GS_SMTP_PORT;
            $mail->IsHTML( GS_HTML_FORMAT );
            $mail->Username = GS_SMTP_USER;
            $mail->Password = GS_SMTP_PASSWORD;
            $mail->SetFrom( GS_SMTP_USER );

            $mailText = $this->getRandomEmailText();
            $mail->Subject = $mailText["subject"];
            $mail->Body = $mailText["body"];

            print "<br/><br/>depurar subject: ";
            print $mail->Subject;
            print "<br/>depurar body: ";
            print $mail->Body;

            $mail->AddAddress( GS_DESTINATION_ADDRESS );

            /*
            if( !$mail->send() ) {
                $result["response"] = "ERROR: " . $mail->ErrorInfo;
            }
            else {
                $result["result"] = true;
                $result["response"] = "OK";
            }*/

            return $result;        
        }
        

        /**
         * This function sends an e-mail every seconds (determined by the config parameter GS_SEND_INTERVAL)
         */
        public function sendEmails() {
            
            $mailsCounter = 0;
            $results = array();
            while ( $mailsCounter < GS_NUM_MAILS_TO_SEND ) {

                sleep( GS_SEND_INTERVAL );

                $result = $this->sendEmail();
                array_push($results, $result["response"]);
                $mailsCounter++;
            }

            return $results;
        }
    }
