
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    // Store the data in a text file
    $file = fopen("submissions.txt", "a");
    fwrite($file, $data);
    fclose($file);

    // Redirect to a thank-you page
    header("Location: thank_you.html");
    exit;
}
?>
