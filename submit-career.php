<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "manyusi1_db");
if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $position = $conn->real_escape_string($_POST['position']);
    $cover_letter = $conn->real_escape_string($_POST['cover_letter']);

    // Handle CV upload
    $cv = $_FILES['cv']['name'];
    $target_dir = "uploads/cv/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $target_file = $target_dir . time() . "_" . basename($cv);
    move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file);

    // Insert into DB
    $sql = "INSERT INTO applications (fullname, email, phone, position, cv, cover_letter) 
            VALUES ('$fullname', '$email', '$phone', '$position', '$target_file', '$cover_letter')";
    if ($conn->query($sql) === TRUE) {
        // ✅ Email Notification
        $to = "asimwemanyusialphonce@gmail.com"; // badilisha kwa email yako
        $subject = "New Job Application - $position";
        $message = "Name: $fullname\nEmail: $email\nPhone: $phone\nPosition: $position\nCover Letter:\n$cover_letter";
        $headers = "From: no-reply@manyusitech.com";
        mail($to, $subject, $message, $headers);

        // ✅ WhatsApp Notification (simple method)
        // Hii inafungua WhatsApp web/mobile ukiwa na WhatsApp installed
        $waMessage = urlencode("New Application:\nName: $fullname\nPhone: $phone\nPosition: $position");
echo "<script>
    alert('Application submitted successfully!');
    window.open('https://wa.me/255767223968?text=$waMessage','_blank');
    window.location='careers.php';
</script>";

    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
