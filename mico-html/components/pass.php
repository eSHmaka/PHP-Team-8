<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are filled
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['text'])) {
        // Display success message
        echo "Your form is submitted.";
    } else {
        // Display error message if any field is empty
        echo "All fields are required.";
    }
}
?>