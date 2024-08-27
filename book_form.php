<?php

include 'config.php';

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['booking'])) {
    // ensure all fields are completely filled
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['destination']) && !empty($_POST['pax']) && !empty($_POST['arrival']) && !empty($_POST['departure'])) {

        // apply sanitization and validation of input
        $name = trim($conn->real_escape_string($_POST['name']));
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        if ($email === false) {
            die("Invalid email format");
        }
        $email = $conn->real_escape_string($_POST['email']);

        $phone = preg_replace('/[^0-9]/', '', $conn->real_escape_string($_POST['phone']));
        $address = trim($conn->real_escape_string($_POST['address']));
        $destination = trim($conn->real_escape_string($_POST['destination']));
        $pax = (int) $_POST['pax'];
        $arrival = $conn->real_escape_string($_POST['arrival']);
        $departure = $conn->real_escape_string($_POST['departure']);

        $sql = "INSERT INTO $table (name, email, phone, address, destination, pax, arrival, departure) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $destination, $pax, $arrival, $departure);

        if ($stmt->execute()) {
            header('Location: book.php');
            echo "<script>alert('Data sent successfully.')</script>";
        } else {
            echo 'Something went wrong! Try again later. Error: ' . $stmt->error;
        }

        // consistent use of object-oriented style
        $stmt->close();

    } else {
        echo 'Please fill out all fields.';
    }

} else {
    echo '<script>alert("Form was not submitted properly.")</script>';
}

$conn->close();
