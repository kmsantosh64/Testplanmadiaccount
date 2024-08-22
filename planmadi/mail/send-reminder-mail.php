<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Database configuration
$servername = "localhost";
$username = "techvito_WPZFI";
$password = "QQ8P{%YOIpMdq)TN-";
$dbname = "techvito_WPZFI";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}

// Function to send email using PHPMailer
function send_email($to, $name, $subject, $body) {
    $mailer = new PHPMailer(true);
    
    try {
        // Server settings
        $mailer->isSMTP();
        $mailer->Host       = 'smtp.gmail.com';
        $mailer->SMTPAuth   = true;
        $mailer->Username   = 'enquirytechvito@gmail.com';  
        $mailer->Password   = 'cppkcvkepxztjrok';  
        $mailer->SMTPSecure = 'ssl';
        $mailer->Port       = 465;
        
        // Recipients
        $mailer->setFrom('enquirytechvito@gmail.com', 'Plan Madi');
        $mailer->addAddress($to, $name);
        
        // Content
        $mailer->isHTML(true);
        $mailer->Subject = $subject;
        $mailer->Body    = $body;

        $mailer->send();
        error_log("Reminder email sent to $name ($to).");
    } catch (Exception $e) {
        error_log("Failed to send reminder email to $name ($to). Mailer Error: {$mailer->ErrorInfo}");
    }
}

// Get current date
$current_date = new DateTime();
$reminder_date = $current_date->modify('+1 day')->format('Y-m-d');

// Send reminders for events due tomorrow
$query = $conn->prepare("
    SELECT * FROM contact_info 
    WHERE event_date = ?
");
$query->bind_param("s", $reminder_date);
$query->execute();
$results = $query->get_result();

while ($row = $results->fetch_assoc()) {
    $name = $row['name'];
    $email = $row['email'];
    $subject = 'Reminder: Payment Due Tomorrow';
    $body = "<p>Dear $name,<br><br>This is a reminder that your payment is due tomorrow. </p><br>Thanks,<br>Plan Madi";

    send_email($email, $name, $subject, $body);
}

// Close connection
$conn->close();
