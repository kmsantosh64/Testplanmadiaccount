<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
if($_POST){
$name = $_POST['namecnt'];
$email = $_POST['emailcnt'];
$phone = $_POST['phonecnt'];
$service = $_POST['service-preferred'];
$message = $_POST['msgcnt'];

//to client,third party
$to=$email;
$mailer = new PHPMailer();

//$mailer->SMTPDebug = '2';

$mailer->IsSMTP();

$mailer->SMTPSecure ='ssl';

$mailer->Host ='smtp.gmail.com';
$mailer->Port       = 465;
$mailer->SMTPAuth =TRUE;

$mailer->Username ='enquirytechvito@gmail.com';  

$mailer->Password ='cppkcvkepxztjrok';

$mailer->From ='enquirytechvito@gmail.com';

$mailer->FromName ="Plan Madi"; 
$mailer->IsHTML(true);  
$email_subject= "Thank you for Contacting Planmadi";
$email_body="<p>Dear $name,<br><br>
Thank you for contacting us, Our team will call you back soon on your request. </p>

Thanks,<br>
Plan Madi";

$mailer->Body =$email_body;
$mailer->Subject =$email_subject;
$mailer->AddAddress($email);
$mailer->Send();

//to admin
$mailer1 = new PHPMailer();


$mailer1->IsSMTP();

$mailer1->SMTPSecure ='ssl';

$mailer1->Host ='smtp.gmail.com';
$mailer1->Port       = 465;
$mailer1->SMTPAuth =TRUE;

$mailer1->Username ='enquirytechvito@gmail.com';  

$mailer1->Password ='cppkcvkepxztjrok';

$mailer1->From ='enquirytechvito@gmail.com';

$mailer1->FromName =$name;
$mailer1->IsHTML(true);
$email_subject="$name has enquired for $service from Plan Madi website";  
$email_body ="
A Visitor has made an enquiry for a service
The details of the customer are below.
Name : <strong>$name</strong>
Phone : <strong>$phone</strong>
Email : <strong>$email</strong>
Service : <strong>$service</strong>
Message: <strong>$message</strong>


Thanks,
Plan Madi
";
$mailer1->Body = nl2br($email_body);
$mailer1->Subject =$email_subject;

//To

$to_admin="planmadi@techvito.in";
$recipients_to1=explode(",",$to_admin);
foreach($recipients_to1 as $email1);
{
$mailer1->AddAddress($email1);
}

//CC




if(!$mailer1->Send())
{
echo "Message was not sent<br/ >";
echo "Mailer Error: " .$mailer1->ErrorInfo;
}
else
{ 
?>
<html>
<body>
 <script type="text/javascript">
             
            
 </script>
</body>
</html>

<?php
}

 }

?>
