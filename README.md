## Send random mails

I created this script for to send a lot of emails to a specific account.

I needed to test the performance of a gmail account that contains a lot of emails. The account would be integrated inside a CRM. It was not possible to use a real account so, I created this script for to send a lot of e-mails (with and without attachemtns) to a test account for to emulate it's performance. 



### Additional information

#### Installation

1) Clone the project
2) Install the dependencies with composer:

php composer.phar update

3) In config.php, set all the properties with the correct settings (Important! The GS_SEND_EMAILS_ENABLED property, must to be true)
3) Open the index.php file in a browser. The sending process will start


#### Create phpdocumentor documentation
C:\wamp\www\php-mail-sender\app\vendor\bin\phpdoc -d ./ -t C:\wamp\www\php-mail-sender\opt\docu --ignore vendor/ --template="responsive-twig"