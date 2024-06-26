<?php
// Retrieve the water bill details from the request
$billDate = $_POST['billDate'];
$meterReading = $_POST['meterReading'];
$waterUsage = $_POST['waterUsage'];
$customerEmail = $_POST['customerEmail'];
$customerNumber = $_POST['customerNumber'];
$status = $_POST['status'];

// Send the water bill details to the owner's email if the status is "Paid"
if ($status === 'Paid') {
    $ownerEmail = 'your-owner-email@example.com'; // Replace with the actual owner's email address
    $subject = 'New Water Bill';
    $message = "A new water bill has been created:\n\n";
    $message .= "Bill Date: $billDate\n";
    $message .= "Meter Reading: $meterReading\n";
    $message .= "Water Usage: $waterUsage m³\n";
    $message .= "Customer Email: $customerEmail\n";
    $message .= "Customer Number: $customerNumber\n";
    $message .= "Status: $status\n";

    if (mail($ownerEmail, $subject, $message)) {
        echo 'Water bill sent to owner email successfully!';
    } else {
        echo 'Error sending water bill to owner email.';
    }
} else {
    echo 'Water bill saved successfully!';
}
?>