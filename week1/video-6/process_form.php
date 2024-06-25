<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $pet = htmlspecialchars($_POST['pet']);

    // Check if any of the fields are empty
    if (empty($firstname) || empty($lastname) || empty($pet)) {
        echo "<p>Please fill in all required fields.</p>";
    } else {
        echo "<h2>Form Submission Received</h2>";
        echo "<p><strong>First Name:</strong> $firstname</p>";
        echo "<p><strong>Last Name:</strong> $lastname</p>";
        echo "<p><strong>Favorite Pet:</strong> $pet</p>";
    }

} else {
    echo "<p>Invalid Request</p>";
}
?>

