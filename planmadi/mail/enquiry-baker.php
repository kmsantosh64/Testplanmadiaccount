<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$absolutePath = '/home4/techvito/public_html/planmadi/wp-config.php';

// Include wp-config.php
require_once($absolutePath);

// Database configuration
$dbname = defined('DB_NAME') ? DB_NAME : '';
$username = defined('DB_USER') ? DB_USER : '';
$password = defined('DB_PASSWORD') ? DB_PASSWORD : '';
$servername = defined('DB_HOST') ? DB_HOST : '';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $maincake = $_POST['cake-type'];
    $name = $_POST['enqnamecnt'];
    $email = $_POST['enqemailcnt'];
    $phone = $_POST['enqphonecnt'];
    $eventtype = $_POST['eventtype'];
    $eventlocation = $_POST['enqeventlocation'];
    $eventstartdate = $_POST['deliveryDate'];
    $eventtime = $_POST['eventdeliverytime'];
    $caketype = !empty($_POST['caketypeservice']) ? implode('+ ', $_POST['caketypeservice']) : "Not Applicable";
    $cakesize = !empty($_POST['cakesize']) ? $_POST['cakesize'] : "Not Applicable";
    $cakelook = !empty($_POST['cakeformat']) ? $_POST['cakeformat'] : "Not Applicable";
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
    $landmarklocation = !empty($_POST['landmarklocation']) ? $_POST['landmarklocation'] : "Not Applicable";
    $surprise_cake = $_POST['surprise_cake'];
    $surpriserecname = !empty($_POST['receiversname']) ? $_POST['receiversname'] : "Not Applicable";
    $surpriserecmob = !empty($_POST['receiversnumber']) ? $_POST['receiversnumber'] : "Not Applicable";
    $surpriserecaltnumber = !empty($_POST['altnumber']) ? $_POST['altnumber'] : "Not Applicable";
    $landmark = !empty($_POST['landmark']) ? $_POST['landmark'] : "Not Applicable";
    $maplink = !empty($_POST['rmaplink']) ? $_POST['rmaplink'] : "Not Applicable";
    $reciveradd = !empty($_POST['receiver-address']) ? $_POST['receiver-address'] : "Not Applicable";
    $partner = $_POST['partnername'];
    $formattedEventStartDate = date('d-M-Y', strtotime($eventstartdate));

    // Insert data into the database
    $sql = "INSERT INTO cake_orders (maincake, name, email, phone, eventtype, eventlocation, eventstartdate, eventtime, caketype, cakesize, cakelook, cakeflavor, cakequantity, groupsize, tiercake, tiercakenumber, fondant_cake, creampreferrence, caketoppers, description, reference, budget, addoncakes, addonnmber, cakemessage, dmaplink, landmarklocation, surprise_cake, surpriserecname, surpriserecmob, surpriserecaltnumber, landmark, maplink, reciveradd, partner) VALUES ('$maincake', '$name', '$email', '$phone', '$eventtype', '$eventlocation', '$eventstartdate', '$eventtime', '$caketype', '$cakesize', '$cakelook', '$cakeflavor', '$cakequantity', '$groupsize', '$tiercake', '$tiercakenumber', '$fondant_cake', '$creampreferrence', '$caketoppers', '$description', '$reference', '$budget', '$addoncakes', '$addonnmber', '$cakemessage', '$dmaplink', '$landmarklocation', '$surprise_cake', '$surpriserecname', '$surpriserecmob', '$surpriserecaltnumber', '$landmark', '$maplink', '$reciveradd', '$partner')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

    // Send confirmation email to the user
    $mailer = new PHPMailer(true);

    try {
        // Server settings
        $mailer->isSMTP();
        $mailer->Host = 'smtp.gmail.com';
        $mailer->SMTPAuth = true;
        $mailer->Username = 'enquirytechvito@gmail.com';
        $mailer->Password = 'cppkcvkepxztjrok'; // Use your Gmail password or app-specific password
        $mailer->SMTPSecure = 'ssl'; // Use 'tls' if needed
        $mailer->Port = 465; // Use 587 for 'tls'

        // Recipients
        $mailer->setFrom('enquirytechvito@gmail.com', 'Plan Madi');
        $mailer->addAddress($email, $name);

        // Content
        $mailer->isHTML(true);
        $mailer->Subject = 'Thank you for Contacting Plan Madi';
        $mailer->Body    = "<p>Dear $name,<br><br>
                            Thank you for your cake service request. Our team will get in touch with you soon regarding your request.</p>
                            <br>Thanks,<br>Plan Madi";

        $mailer->send();
        echo 'Confirmation email has been sent.<br>';

    } catch (Exception $e) {
        echo "Confirmation email could not be sent. Mailer Error: {$mailer->ErrorInfo}<br>";
    }

    // Send notification email to admin
    $mailer1 = new PHPMailer(true);

    try {
        // Server settings
        $mailer1->isSMTP();
        $mailer1->Host = 'smtp.gmail.com';
        $mailer1->SMTPAuth = true;
        $mailer1->Username = 'enquirytechvito@gmail.com';
        $mailer1->Password = 'cppkcvkepxztjrok';
        $mailer1->SMTPSecure = 'ssl'; // Use 'tls' if needed
        $mailer1->Port = 465; // Use 587 for 'tls'

        // Recipients
        $mailer1->setFrom('enquirytechvito@gmail.com', 'Plan Madi');
        $mailer1->addAddress('santosh.manjunath@techvito.in');

        // Content
        $mailer1->isHTML(true);
        $mailer1->Subject = "Plan Madi: New Cake Service Request from $name";
        $mailer1->Body    = "
            <p>Dear Admin,<br><br>
            A new cake service request has been received. The details are as follows:</p>
            <p><strong>Main Cake:</strong> $maincake<br>
               <strong>Name:</strong> $name<br>
               <strong>Email:</strong> $email<br>
               <strong>Phone:</strong> $phone<br>
               <strong>Event Type:</strong> $eventtype<br>
               <strong>Event Location:</strong> $eventlocation<br>
               <strong>Event Start Date:</strong> $formattedEventStartDate<br>
               <strong>Event Time:</strong> $eventtime<br>
               <strong>Cake Type:</strong> $caketype<br>
               <strong>Size:</strong> $cakesize<br>
               <strong>Look:</strong> $cakelook<br>
               <strong>Flavor:</strong> $cakeflavor<br>
               <strong>Quantity:</strong> $cakequantity<br>
               <strong>Group Size:</strong> $groupsize<br>
               <strong>Tier Cake:</strong> $tiercake<br>
               <strong>Tier Number:</strong> $tiercakenumber<br>
               <strong>Fondant Cake:</strong> $fondant_cake<br>
               <strong>Cream Preference:</strong> $creampreferrence<br>
               <strong>Cake Toppers:</strong> $caketoppers<br>
               <strong>Description:</strong> $description<br>
               <strong>Reference:</strong> $reference<br>
               <strong>Budget:</strong> $budget<br>
               <strong>Additional Cakes:</strong> $addoncakes<br>
               <strong>Additional Number:</strong> $addonnmber<br>
               <strong>Message on Cake:</strong> $cakemessage<br>
               <strong>Google Map Link:</strong> $dmaplink<br>
               <strong>Landmark Location:</strong> $landmarklocation<br>
               <strong>Surprise Cake:</strong> $surprise_cake<br>
               <strong>Receiver Name:</strong> $surpriserecname<br>
               <strong>Receiver Mobile:</strong> $surpriserecmob<br>
               <strong>Receiver Alternate Number:</strong> $surpriserecaltnumber<br>
               <strong>Landmark:</strong> $landmark<br>
               <strong>Map Link:</strong> $maplink<br>
               <strong>Receiver Address:</strong> $reciveradd<br>
               <strong>Partner:</strong> $partner</p>
            <p>Thank you,<br>Plan Madi</p>";

        $mailer1->send();
        echo 'Notification email has been sent to admin.<br>';

    } catch (Exception $e) {
        echo "Notification email could not be sent. Mailer Error: {$mailer1->ErrorInfo}<br>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

} else {
    echo "Invalid request method.";
}

?>
