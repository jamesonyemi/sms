<?php
require 'class-Clockwork.php';

try
{
    // Create a Clockwork object using your API key
    $clockwork = new Clockwork( $API_KEY = "91fe6dff6b7f399b2855aa7c2cb21b662a81c6aa
");

    // Setup and send a message
    $message = array( 'to' => '441234567891', 'message' => 'This is a test!' );
    $result = $clockwork->send( $message );

    // Check if the send was successful
    if($result['success']) {
        echo 'Message sent - ID: ' . $result['id'];
    } else {
        echo 'Message failed - Error: ' . $result['error_message'];
    }
}
catch (ClockworkException $e)
{
    echo 'Exception sending SMS: ' . $e->getMessage();
}
?>