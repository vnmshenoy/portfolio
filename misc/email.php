
<?php


$name ='';
$email ='';
$phoneNumber ='';
$comment='';
$name = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['name']);
$comment = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['comment']);
$email = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['email']);
$phoneNumber = preg_replace("/[^a-zA-Z]/", "", $_REQUEST['phone']);
$santiziedEmail = filter_input(INPUT_GET,  
            'email', FILTER_SANITIZE_SPECIAL_CHARS); 
$santiziedComment = filter_input(INPUT_GET,  
            'comment', FILTER_SANITIZE_SPECIAL_CHARS); 
echo '<h4>Thanks for your message. I will get back to you soon</h4><br>
        <a href="/index.html">Go Back to Home Page</a><br>
      ';
echo $santiziedEmail;
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "name:".$name.",comment:". $santiziedComment.",email:".$santiziedEmail.",phoneNumber:".$phoneNumber."---------";
fwrite($myfile,"\n". $txt);

fclose($myfile);
?>
