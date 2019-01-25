
<?php
/*
require_once 'swiftmailer/lib/swift_required.php';
$name ='';
$email ='';
$phoneNumber ='';
$comment='';
$name = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['name']);
$comment = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['comment']);
$email = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['email']);
$phoneNumber = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['phone']);
$transport = Swift_SmtpTransport::newInstance('smtp.ipage.com', 465, 'ssl')
    ->setUsername("vnmshenoy@manjunathshenoy.com")
    ->setPassword("");
$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance('Test Subject')
    ->setFrom(array('vnmshenoy@manjunathshenoy.com' => 'You have a new enquiry'))
    ->setTo(array('vnmshenoy@gmail.com'))
    ->setBody("name is: " . $name . " \n enquiry is: " . $comment . "\n email " . $email. "\n phone number " . $phoneNumber);

$result = $mailer->send($message);    
echo '<h4>Thanks for your message. I will get back to you soon</h4><br>
        <a href="/index.html">Go Back to Home Page</a>
      ';
*/

$name ='';
$email ='';
$phoneNumber ='';
$comment='';
$name = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['name']);
$comment = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['comment']);
$email = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['email']);
$phoneNumber = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['phone']);
echo '<h4>Thanks for your message. I will get back to you soon</h4><br>
        <a href="/index.html">Go Back to Home Page</a><br>
      ';
echo $name;
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "name:".$name.",comment:". $comment.",email:".$email.",phoneNumber:".$phoneNumber."---------";
fwrite($myfile,"\n". $txt);

fclose($myfile);
?>
