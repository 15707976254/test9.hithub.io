<?php
if (mail($recipient_email, "New Message from Contact Form", $email_content, "From: $email")) {
     echo json_encode(['success' => true]);
 } else {
     echo json_encode(['success' => false]);
 }
?>