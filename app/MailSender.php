<?php

    // We include all required files
    require_once dirname(__FILE__) . "/vendor/autoload.php";
    require_once dirname(__FILE__) . "/config.php";

    /**
     * The class MailSender contains the required methods for to send the e-mails to the destination address
     */
    class MailSender {

        /**
         * The class constructor
         */
        public function __construct( $fromAddress = GS_FROM_ADDRESS,
                                     $replytoAddress = GS_FROM_REPLYTO,
                                     $fromName = GS_FROM_NAME,
                                     $destinationAddress = GS_DESTINATION_ADDRESS, 
                                     $numEmails = GS_NUM_MAILS_TO_SEND, 
                                     $interval = GS_SEND_INTERVAL, 
                                     $server = GS_SMTP_SERVER, 
                                     $port = GS_SMTP_PORT, 
                                     $user = GS_SMTP_USER, 
                                     $password = GS_SMTP_PASSWORD ) {
            $this->fromAddress = $fromAddress;
            $this->replytoAddress = $replytoAddress;
            $this->fromName = $fromName;
            $this->destinationAddress = $destinationAddress;
            $this->numEmails = (int) $numEmails;
            $this->interval = (int) $interval;
            $this->server = $server;
            $this->port = (int) $port;
            $this->user = $user;
            $this->password = $password;
        }
        

        /**
         * This function gets a random language from all the languages available
         */
        public function getRandomLang() {
            return array_rand( $GLOBALS["EM_LANGS"], 1 );
        }


        /**
         * This function gets a subject and a body for the mail in a random language
         */
        public function getRandomEmailText() {

            $mailText = array();

            // For every e-mail, we get a random lang
            $lang = $this->getRandomLang();

            // Given a random lang code, we get the number of subjects and bodies available
            $numSubjects = count( $GLOBALS["EM_SUBJECT"][$lang] ) - 1;
            $numBodies = count( $GLOBALS["EM_BODY"][$lang] ) - 1;

            // We build the e-mail text
            $mailText["subject"] = $GLOBALS["EM_SUBJECT"][$lang][ mt_rand(0, $numSubjects) ];
            $mailText["body"]    = $GLOBALS["EM_BODY"][$lang][ mt_rand(0, $numBodies) ];

            return $mailText;

        }

        /**
         * This function determines randomly if the mail must have an attachment or not. With this 
         * simple approach, we try that the function returns true about 30% of times
         */
        public function mustAddAttachment() {

            $result = array( 
                             0 => true, 
                             1 => true,
                             2 => true,
                             3 => false,
                             4 => false,
                             5 => false,
                             6 => false,
                             7 => false,
                             8 => false,
                             9 => false
                            );

            return $result[ mt_rand( 0, count($result) -1 ) ];

        }


        /**
         * This function gets a random attachment from the given relative path
         */
        public function getRandomAttachment( $path = GS_ATTACHMENT_PATH ) {

            $files = scandir( realpath( $path ) );

            $numFiles = count( $files ) - 1;
            $fileID = mt_rand( 2, $numFiles ); // We start at 2 because the two first results that returns scandir are "." and ".."

            return $files[$fileID];
        
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
            $mail->CharSet = "UTF-8";
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = GS_SMTP_DEBUG; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = GS_SMTP_AUTH; // authentication enabled
            $mail->SMTPSecure = GS_SMTP_SECURE; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = $this->server;
            $mail->Port = $this->port;
            $mail->Username = $this->user;
            $mail->Password = $this->password;
            $mail->IsHTML( GS_HTML_FORMAT );
            $mail->SetFrom( $this->fromAddress, $this->fromName );
            $mail->AddReplyTo($this->replytoAddress, $this->fromName);
            $mail->AddAddress( $this->destinationAddress );
            $mailText = $this->getRandomEmailText();
            $mail->Subject = $mailText["subject"];
            $mail->Body = $mailText["body"];

            $mustAddAttachment = $this->mustAddAttachment();

            if ( $mustAddAttachment ) {
                $attachment = $this->getRandomAttachment( GS_ATTACHMENT_PATH );
                $mail->addAttachment( GS_ATTACHMENT_PATH . "/". $attachment );
            }


            if ( GS_SEND_EMAILS_ENABLED ) {

                if( !$mail->send() ) {
                    $result["response"] = "ERROR: " . $mail->ErrorInfo;
                }
                else {
                    $result["result"] = true;
                    $result["response"] = "OK";
                }

            }

            return $result;        
        }
        

        /**
         * This function sends an e-mail every seconds (determined by the config parameter GS_SEND_INTERVAL)
         */
        public function sendEmails() {

            $mailsCounter = 0;
            $results = array();

            $dateFormat = "Y-M-d h:i:s";
            print "<strong>The process starts at: </strong>" . gmdate( $dateFormat, time() );

            while ( $mailsCounter < $this->numEmails ) {

                sleep( $this->interval );

                $result = $this->sendEmail();
                array_push( $results, $result["response"] );
                $mailsCounter++;
            }

            print "<br/><strong>The process ends at: </strong>" . gmdate( $dateFormat, time() ) . "<br/><br/>";
            return $results;
        }
    }
