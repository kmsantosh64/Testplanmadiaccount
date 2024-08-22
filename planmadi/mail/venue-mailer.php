<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if($_POST){
$name = $_POST['enqnamecnt'];
$lastname = $_POST['enqlastnamecnt'];
$email = $_POST['enqemailcnt'];
$phone = $_POST['enqphonecnt'];
$checkin = $_POST['checkinDate'];
$checkout = $_POST['checkoutDate'];
$adults = $_POST['enqadultgroupsize'];
$childrens = $_POST['enqchildrengroupsize'];
$rooms = $_POST['roomnumbers'];
$roomtype = $_POST['roomtype'];
$specialpackage = $_POST['splpackages'];
$foodtype = $_POST['foodoptions'];
$address = $_POST['fulladdress'];
$additionalinfo = $_POST['splrequests'];
$resort = $_POST['partnerName'];
$formattedcheckinDate = date('d-M-Y', strtotime($checkin));
$formattedcheckoutDate = date('d-M-Y', strtotime($checkout));
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

$mailer1->Password = 'cppkcvkepxztjrok';

$mailer1->From ='enquirytechvito@gmail.com';

$mailer1->FromName =$name;
$mailer1->IsHTML(true);
$email_subject="$name enquired for $resort";  
$email_body ="
A Visitor has made an enquiry for $resort on $formattedcheckinDate to $formattedcheckoutDate 
The details of the customer are below.
First Name : <strong>$name</strong>
Last Name  : <strong>$lastname</strong>
Phone : <strong>$phone</strong>
Email : <strong>$email</strong>
Check in Date: <strong>$formattedcheckinDate</strong>
Check out Date: <strong>$formattedcheckoutDate</strong>
Number of Adults : <strong>$adults</strong>
Number of Childrens : <strong>$childrens</strong>
Number of rooms : <strong>$rooms</strong>
Room Type : <strong>$roomtype</strong>
Special Package required : <strong>$specialpackage</strong>
Food Type : <strong>$foodtype</strong>
Full Address: <strong>$address</strong>
Additional Info : <strong>$additionalinfo</strong>
Resort: <strong>$resort</strong>



Thanks,
Plan Madi
";
$mailer1->Body = nl2br($email_body);
$mailer1->Subject =$email_subject;

//To

$to_admin="planmadi@techvito.in";
$recipients_to1=explode(",",$to_admin);
foreach($recipients_to1 as $email1) {
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
