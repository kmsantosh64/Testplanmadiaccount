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

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully.<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone_number = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $event_date = $_POST['event_date'] ?? '';
    $textfield_area = $_POST['message'] ?? '';

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO contact_info (name, email, phone_number, address, textfield_area, event_date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone_number, $address, $textfield_area, $event_date);

    if ($stmt->execute()) {
        echo "New record created successfully.<br>";

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
                                Thank you for your order. Our team will call you back soon regarding your request.</p>
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
            $mailer1->Subject = "Plan Madi: New Order - $name has requested a cake service";
            $mailer1->Body    = "<p>$name has requested a cake service. The details are as follows:</p>
                                 <p><strong>Name:</strong> $name<br>
                                    <strong>Phone:</strong> $phone_number<br>
                                    <strong>Email:</strong> $email<br>
                                    <strong>Address:</strong> $address<br>
                                     <strong>Event Date:</strong> $event_date<br>
                                    <strong>Description:</strong> $textfield_area</p>
                                 <p>Thanks,<br>Plan Madi</p>";

            $mailer1->send();
            echo 'Notification email has been sent to admin.<br>';

        } catch (Exception $e) {
            echo "Notification email could not be sent. Mailer Error: {$mailer1->ErrorInfo}<br>";
        }

    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}

?>
