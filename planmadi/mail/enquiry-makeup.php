<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
if($_POST){
$name = $_POST['enqnamecnt'];
$email = $_POST['enqemailcnt'];
$phone = $_POST['enqphonecnt'];
$eventtype = $_POST['eventtype'];
$eventlocation = $_POST['enqeventlocation'];
$eventstartdate = $_POST['txtstartDate'];
$eventtime = $_POST['eventappttime'];
$makeuptype = $_POST['makeuptypeservice'];
$makeupservices = implode(', ', $_POST['makeupservice']);
$groupsize = $_POST['enqeventgropsize'];
$brand = $_POST['enqbrands'];
$accessories = $_POST['enqaccessories'];
$trialmakeup = $_POST['trail_makeup'];
$description = $_POST['makeupdesc'];
$reference = $_POST['upload'];
$budget = $_POST['eventbudget'];
$partner = $_POST['partnername'];
$formattedEventStartDate = date('d-M-Y', strtotime($eventstartdate));
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
Thank you for contacting us, Our team will call you back soon on your request.</p>

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
$email_subject="$name has requested makeup service on $formattedEventStartDate";  
$email_body ="
An enquiry for Makeup service
The details are below.
Name : <strong>$name</strong>
Phone : <strong>$phone</strong>
Email : <strong>$email</strong>
Event Type : <strong>$eventtype</strong>
Event Location : <strong>$eventlocation</strong>
Event StartDate : <strong>$formattedEventStartDate</strong>
Event TIme: <strong>$eventtime</strong>
Makeup Type : <strong>$makeuptype</strong>
Makeup Services Required : <strong>$makeupservices</strong>
Group Size: <strong>$groupsize</strong>
Brand Preferred : <strong>$brand</strong>
Accessories : <strong>$accessories</strong>
Trail Makeup Required : <strong>$trialmakeup</strong>
More Details: <strong>$description</strong>
Budget : <strong>$budget</strong>
Service Partner: <strong>$partner</strong>

Thanks,
Plan Madi
";
$mailer1->Body = nl2br($email_body);
$mailer1->Subject =$email_subject;

//To
if($_POST['partnername'] == "Yashu Gowda") {

    $to_admin= "yashrpgowda2304@gmail.com";
   }
   elseif ($_POST['partnername'] == "Sangita Agrawal"){
    $to_admin= "sangita121172@gmail.com";
   }
   elseif ($_POST['partnername'] == "Deepthi"){
    $to_admin= "deepthimakam.512@gmail.com";
   }
   elseif ($_POST['partnername'] == "Deepa c"){
    $to_admin= "deepajaganath17@gmail.com";
   }
   elseif ($_POST['partnername'] == "Kalpana Jain"){
    $to_admin= "aurabeauty.kj@gmail.com";
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


//BCC


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
