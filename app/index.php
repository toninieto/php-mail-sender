<?php
    /**
     * This file contains the form that is shown to the user
     */


    /**
     * We load all the config parameters
     */
    require_once dirname(__FILE__) . "/config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SEND RANDOM EMAILS IN BATCH MODE TO A SPECIFIC ACCOUNT</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="container">  
            <form id="contact" action="processForm.php" method="post">
                <h3>SEND RANDOM EMAILS IN BATCH MODE TO A SPECIFIC ACCOUNT</h3>
                <h4>Sends a determined numbers of e-mails, combining different parameters, to a specific account</h4>
                <h4>The most important config parameters are shown below. If you want, change them in this screen and click the Submit button!</h4>
                <h4>You can change all the application parameters in the config.php file</h4>

                <h5>-- General options --</h5>
                <fieldset>
                    <label for="destinationaddress">Destination address</label>
                    <input type="text" name="destinationaddress" id="destinationaddress" tabindex="10" required value="<?php print GS_DESTINATION_ADDRESS; ?>">
                </fieldset>
                <fieldset>
                    <label for="numemails">Number of e-mails to send</label>
                    <input type="text" name="numemails" id="numemails" tabindex="20" required autofocus value="<?php print GS_NUM_MAILS_TO_SEND; ?>">
                </fieldset>
                <fieldset>
                    <label for="interval">Interval in seconds between e-mails</label>
                    <input type="text" name="interval" id="interval" tabindex="30" required value="<?php print GS_SEND_INTERVAL; ?>">
                </fieldset>
                
                <h5>-- SMTP parameters --</h5>
                <fieldset>
                    <label for="server">Server</label>
                    <input type="text" name="server" id="server" tabindex="40" required value="<?php print GS_SMTP_SERVER; ?>">
                </fieldset>
                <fieldset>
                    <label for="port">Port</label>
                    <input type="text" name="port" id="port" tabindex="50" required value="<?php print GS_SMTP_PORT; ?>">
                </fieldset>
                <fieldset>
                    <label for="user">User</label>
                    <input type="text" name="user" id="user" tabindex="60" required value="<?php print GS_SMTP_USER; ?>">
                </fieldset>
                <fieldset>
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" tabindex="70" required value="<?php print GS_SMTP_PASSWORD; ?>">
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="submit" tabindex="80" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>
        </div>
    </body>

</html>



<?php

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
