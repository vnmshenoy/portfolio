
<?php


$name ='';
$email ='';
$phoneNumber ='';
$comment='';
$bodystart='My comment is: ';
$bodyemail=' My email id is: ';
$bodyph=' My mobile is: ';
$name = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['name']);
$comment = preg_replace("/[^a-zA-Z.\s]/", " ", $_REQUEST['comment']);
$email = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['email']);
$phoneNumber = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['phone']);
 
echo '<h4>Thanks for your message. I will get back to you soon</h4><br>
        <a href="/index.html">Go Back to Home Page</a><br>
      ';
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
/*$txt = "name: ".$name." ,comment: ". $comment.",email:".$email.",phoneNumber:".$phoneNumber."---------";
fwrite($myfile,"\n". $txt);*/


$to = "vnmshenoy@gmail.com";
$subject = "new enquiry";
$body =  "Hello My name is: ".$name.", \n and my comment is: ".$comment." . \n Please reach out to me at ".$phoneNumber." OR \n  email".$email;
$headers = "From: ipage" . "\r\n" .
mail($to,$subject,$body,$headers);
fclose($myfile);
?>
