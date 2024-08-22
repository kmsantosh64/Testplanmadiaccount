<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
if($_POST){
    $maincake = $_POST['cake-type'];
    $name = $_POST['enqnamecnt'];
    $email = $_POST['enqemailcnt'];
    $phone = $_POST['enqphonecnt'];
    $eventtype = $_POST['eventtype'];
    $eventlocation = $_POST['enqeventlocation'];
    $eventstartdate = $_POST['deliveryDate'];
    $eventtime= $_POST['eventdeliverytime'];
    $caketype =!empty($_POST['caketypeservice']) ? implode('+ ', $_POST['caketypeservice']) : "Not Applicable";
    $cakesize = !empty($_POST['cakesize']) ? $_POST['cakesize']: "Not Applicable";
    $cakelook = !empty($_POST['cakeformat']) ? $_POST['cakeformat']: "Not Applicable";
    $cakeflavor = $_POST['flavor-cake'];
    $cakequantity = !empty($_POST['cakequantity']) ? $_POST['cakequantity'] : "Not Applicable";
    $groupsize = $_POST['enqtotalpeople'];
    $tiercake = !empty($_POST['tier_cake']) ? $_POST['tier_cake'] : "Not Applicable";
    $tiercakenumber = !empty($_POST['tiercakenumber']) ? $_POST['tiercakenumber'] : "Not Applicable";
    $fondant_cake = !empty($_POST['fondant_cake']) ? $_POST['fondant_cake'] : "Not Applicable";
    $creampreferrence = !empty($_POST['creampreferred']) ? $_POST['creampreferred'] : "Not Applicable";
    $caketoppers = !empty($_POST['caketoppers']) ? $_POST['caketoppers'] : "Not Applicable";
    $description = !empty($_POST['enqbakeinstructions']) ? $_POST['enqbakeinstructions'] : "Not Applicable";
    $reference = $_POST['upload'];
    $budget = $_POST['cakebudget'];
    $addoncakes = !empty($_POST['cakeadditionalservice']) ? implode(', ', $_POST['cakeadditionalservice']) : "Not Applicable";
    $addonnmber = !empty($_POST['additionalcakenumber']) ? $_POST['additionalcakenumber'] : "Not Applicable";
    $cakemessage = $_POST['cakemessage'];
    $dmaplink = !empty($_POST['gmaplink']) ? $_POST['gmaplink'] : "Not Applicable";
    $landmarklocation = !empty($_POST['landmarklocation']) ? $_POST['gmaplink']: "Not Applicable";
    $surprise_cake = $_POST['surprise_cake'];
    $surpriserecname  = !empty($_POST['receiversname']) ? $_POST['receiversname'] : "Not Applicable";
    $surpriserecmob = !empty($_POST['receiversnumber']) ? $_POST['receiversnumber'] : "Not Applicable";
    $surpriserecaltnumber = !empty($_POST['altnumber']) ? $_POST['altnumber'] : "Not Applicable";
    $landmark = !empty($_POST['landmark']) ? $_POST['landmark'] : "Not Applicable";
    $maplink = !empty($_POST['rmaplink']) ? $_POST['rmaplink'] : "Not Applicable";
    $reciveradd= !empty($_POST['receiver-address']) ? $_POST['receiver-address'] : "Not Applicable";
    $partner = $_POST['partnername'];
    $formattedEventStartDate = date('d-M-Y', strtotime($eventstartdate));



if ($surprise_cake === 'no') {
    // If surprise cake is not selected, hide the receiver's details
    $hide_details = true;
} else {
    // If surprise cake is selected, display the receiver's details
    $hide_details = false;
}
//to client,third party
$to=$email;
$mailer = new PHPMailer();

// $mailer->SMTPDebug = '2';

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
Thank you for your order, our team will call you back soon on your request. </p>

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
$email_subject="Plan Madi: New Order - $name has requested $caketype cake service on $formattedEventStartDate";  
$email_body ="
$name has requested a $caketype cake on $formattedEventStartDate at $eventtime.
The details are as below.

<strong style='background-color: #FFF2E0; padding: 10px;'>Personal Details</strong>
Name : <strong>$name</strong>
Phone : <strong>$phone</strong>
Email : <strong>$email</strong>
Delivery Address : <strong>$eventlocation</strong>
Google map location : <strong>$dmaplink</strong>
Landmark: <strong>$landmarklocation</strong>
Delivery Date: <strong>$formattedEventStartDate</strong>
Delivery Time: <strong>$eventtime</strong>
Event Type : <strong>$eventtype</strong><br/>
<strong style='background-color: #FFF2E0; padding: 10px;'>Cake Details</strong>
Cake Preferred : <strong>$maincake</strong>
Cake Type : <strong>$caketype</strong>
Cake Weight: <strong>$cakesize</strong>
Cake Look : <strong>$cakelook</strong>
Cake Flavor : <strong>$cakeflavor</strong>
Quantity : <strong>$cakequantity</strong>
Group Size (Pax): <strong>$groupsize</strong>
Budget : <strong>$budget</strong>
Message on the cake: <strong>$cakemessage</strong><br/>
<strong style='background-color: #FFF2E0; padding: 10px;'>Cake Preferences</strong>
is it fondant cake: <strong>$fondant_cake</strong>
Cream Preferrence : <strong>$creampreferrence </strong>
is it tier cake : <strong>$tiercake</strong>
Number of tiers: <strong>$tiercakenumber</strong>
Additional Cakes : <strong>$addoncakes</strong>
Additional Cake details : <strong>$addonnmber</strong>
Any Cake Toppers required : <strong>$caketoppers</strong>(Note: Cake Toppers are provided based on the availability only)<br/>
<strong style='background-color: #FFF2E0; padding: 10px;'>Surprise order</strong>
is it surprise order : <strong>$surprise_cake</strong>
Receiver's Name: <strong>$surpriserecname</strong>
Receiver's Number : <strong>$surpriserecmob</strong>
Receiver's Alternate Mobile Number : <strong>$surpriserecaltnumber</strong>
Receiver's Address: <strong>$reciveradd</strong>
Receiver's Address Google Map Location: <strong>$maplink </strong>
Receiver's Address Landmark: <strong>$landmark</strong>

Additional Information: <strong>$description</strong>
Service Partner: <strong>$partner</strong><br/>

Thanks,
Plan Madi
";
$mailer1->Body = nl2br($email_body);
$mailer1->Subject =$email_subject;

//To
     $to_admin= $email;
    if($_POST['partnername'] == "Dr. Vanitha Parichith") {

        $to_admin= "vanitharamu.iisc@gmail.com";
    }
    elseif ($_POST['partnername'] == "Niharika Pawar"){
        $to_admin= "thechefbyheart@gmail.com";
    }
    elseif ($_POST['partnername'] == "Juhi Jain"){
        $to_admin= "juhijain635@gmail.com";
    }
    elseif ($_POST['partnername'] == "Madhuri PL"){
        $to_admin= "plmadhuri15@gmail.com";
    }
    elseif ($_POST['partnername'] == "Anju Harish"){
        $to_admin= "hn.anju15@gmail.com";
    }
    elseif ($_POST['partnername'] == "Shumaila Rai"){
        $to_admin= "sheemu21@gmail.com";
    }
    elseif ($_POST['partnername'] == "Helony Lakhani"){
        $to_admin= "bakestudiobyhelony@gmail.com";
    }
    elseif ($_POST['partnername'] == "Sampada N Kadiwal"){
        $to_admin= "sampada2112@gmail.com";
    }
    elseif ($_POST['partnername'] == "Sapna Omkar"){
        $to_admin= "sapnaomkar16@gmail.com";
    }
    elseif ($_POST['partnername'] == "Roshani Ravindra Chirde"){
        $to_admin= "roshanirc.87@gmail.com";
    }
    elseif ($_POST['partnername'] == "Sheetal Jain"){
        $to_admin= "richelle.jain@gmail.com";
    }
    elseif ($_POST['partnername'] == "Asha"){
        $to_admin= "ashamackasare@gmail.com";
    }
    elseif ($_POST['partnername'] == "Anitha"){
        $to_admin= "ani.krishna18@gmail.com";
    }
    elseif ($_POST['partnername'] == "Sreejaya Jayashankar"){
        $to_admin= "sreeju12@gmail.com";
    }
    elseif ($_POST['partnername'] == "Shivangi Banerjee"){
        $to_admin= "sortedtheassorted@gmail.com";
    }
    elseif ($_POST['partnername'] == "Jayashree Kishore"){
        $to_admin= "jkbakes21@gmail.com";
    }
    elseif ($_POST['partnername'] == "Mamatha"){
        $to_admin= "mamatha.yums@gmail.com";
    }
    elseif ($_POST['partnername'] == "Rohini Hegde"){
        $to_admin= "rohinikalse@gmail.com";
    }
    elseif ($_POST['partnername'] == "Shambhavi Shesh"){
        $to_admin= "bhuvisbakehouse@gmail.com";
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
