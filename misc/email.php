
<?php

require_once 'swiftmailer/lib/swift_required.php';
$name ='';
$email ='';
$phoneNumber ='';
$comment='';
$name=$_REQUEST['name'];
$comment = $_REQUEST['comment'];
$email = $_REQUEST['email'];
$phoneNumber = $_REQUEST['phone'];
$transport = Swift_SmtpTransport::newInstance('smtp.ipage.com', 465, 'ssl')
    ->setUsername("vnmshenoy@manjunathshenoy.com")
    ->setPassword("iPage#123");
$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance('Test Subject')
    ->setFrom(array('vnmshenoy@manjunathshenoy.com' => 'You have a new enquiry'))
    ->setTo(array('vnmshenoy@gmail.com'))
    ->setBody("name is: " . $name . " \n enquiry is: " . $comment . "\n email " . $email. "\n phone number " . $phoneNumber);

$result = $mailer->send($message);    


?> 
