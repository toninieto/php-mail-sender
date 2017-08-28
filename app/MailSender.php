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
        

        public function sendEmail() {

            $mail = new PHPMailer(); // create a new object
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = GES_SMTP_DEBUG; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = GES_SMTP_AUTH; // authentication enabled
            $mail->SMTPSecure = GES_SMTP_SECURE; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = GES_SMTP_SERVER;
            $mail->Port = 465; // or 587
            $mail->IsHTML( GES_HTML_FORMAT );
            $mail->Username = GES_SMTP_USER;
            $mail->Password = GES_SMTP_PASSWORD;
            $mail->SetFrom( GES_SMTP_USER );
            $mail->Subject = $GLOBALS["GES_EMAILS"]["en"]["subject"][0];
            $mail->Body = $GLOBALS["GES_EMAILS"]["en"]["body"][0];
            $mail->AddAddress( GES_DESTINATION_ADDRESS );

            if(!$mail->send()) 
            {
                echo "Mailer Error: " . $mail->ErrorInfo;
                return false;
            } 
            else 
            {
                return true;
            }
        
        }
        

        public function sendEmails() {
            $result = $this->sendEmail();
            return $result;
        }
        
    }
