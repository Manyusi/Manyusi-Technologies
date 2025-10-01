<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];

    // Hapa unaweza kuihifadhi DB au kutuma email
    $file = fopen("uploads/helpdesk.txt", "a");
    fwrite($file, "Name: $name | Email: $email | Issue: $issue\n\n");
    fclose($file);

    echo "<script>alert('Your ticket has been submitted! Our team will contact you soon.'); window.location='helpdesk.php';</script>";
}
?>
