<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
if($_POST){
$name = $_POST['decorname'];
$email = $_POST['decoremail'];
$phone = $_POST['decormobilenumber'];
$altPhone = $_POST['decoraltmobilenumber'];
$ocassion = $_POST['ocassion-type'];
$address = $_POST['infoaddress'];
$venue = $_POST['venue'];
$decorationType = $_POST['decorationtype'];
$decorationTheme = !empty($_POST['themedecorationname']) ? $_POST['themedecorationname']: "Not Applicable";
$city = $_POST['city'];
$eventDate = $_POST['deliveryDate'];
$eventTime = $_POST['eventdeliverytime'];
$formattedEventDate = date('d-M-Y', strtotime($eventDate));
$decorationBudget = $_POST['decoration-budget'];
$decorationMessage = $_POST['decorationmessage'];
$reference = $_POST['upload'];
$partnerName = $_POST['partnername'];

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
$email_subject= "Thank you for Contacting Plan Madi";
$email_body="<p>Dear $name,<br><br>
Thank you for contacting us, our team will call you back soon on your request. </p>

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
$mailer1->AddAttachment($_FILES['upload']['tmp_name'],$_FILES['upload']['name']); 
$email_subject="$name has enquired for $decorationType on $formattedEventDate";  
$email_body ="
An enquiry for $ocassion with $decorationType type
The details requested are below.
Name : <strong>$name</strong>
Phone : <strong>$phone</strong>
Alternate Phone Number : <strong>$altPhone</strong>
Email : <strong>$email</strong>
Address: <strong>$address</strong>
Ocassion : <strong>$ocassion</strong>
Decoration Type : <strong>$decorationType</strong>
Decoration Theme : <strong>$decorationTheme</strong>
Venue: <strong>$venue</strong>
City : <strong>$city</strong>
Event Date : <strong>$formattedEventDate</strong>
Event Time : <strong>$eventTime</strong>
Decoration Budget <strong>$decorationBudget</strong>
Message: <strong>$decorationMessage</strong>
Partner: <strong>$partnerName</strong>

Thanks,
Plan Madi
";
$mailer1->Body = nl2br($email_body);
$mailer1->Subject =$email_subject;

//To

if($_POST['partnername'] == "Sunil") {

    $to_admin= "vinumonu240@gmail.com";
   }

$recipients_to1=explode(",",$to_admin);
foreach($recipients_to1 as $email1);
{
$mailer1->AddAddress($email1);
$mailer1->AddAddress($email);
}

//CC
$cc_address="planmadi@techvito.in";
$mailer1->AddCC($cc_address);




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
