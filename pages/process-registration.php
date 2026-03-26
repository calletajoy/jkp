<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $organization = $_POST['organization'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $nationality = $_POST['nationality'] ?? '';
    $attendees = $_POST['attendees'] ?? '';
    $registeringAs = $_POST['registeringAs'] ?? '';
    
    // Validate required fields
    if (empty($firstName) || empty($lastName) || empty($email)) {
        echo json_encode(['success' => false, 'message' => 'Please fill all required fields']);
        exit;
    }
    
    // Email details
    $to = 'calletanatavona@gmail.com'; // Change this to your email
    $subject = 'New Event Registration - ' . ucfirst($registeringAs);
    
    $message = "
    New Registration Details:
    
    Name: $firstName $lastName
    Organization: $organization
    Phone: $phone
    Email: $email
    Nationality: $nationality
    Number of Attendees: $attendees
    Registering As: $registeringAs
    
    Submitted via Jumuiya Events Page
    ";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    $mailSent = mail($to, $subject, $message, $headers);
    
    // Optional: Save to database here
    
    if ($mailSent) {
        echo json_encode(['success' => true, 'message' => 'Registration submitted successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Email sending failed']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>