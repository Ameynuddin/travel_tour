<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "booking";
$table = "book_form";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['booking'])) {

    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['destination']) && !empty($_POST['pax']) && !empty($_POST['arrival']) && !empty($_POST['departure'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $destination = $_POST['destination'];
        $pax = $_POST['pax'];
        $arrival = $_POST['arrival'];
        $departure = $_POST['departure'];
    } else {
        header('Location: book.php');
    }

    $sql = "INSERT INTO $table (name, email, phone, address, destination, pax, arrival, departure) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $destination, $pax, $arrival, $departure);

    if ($stmt->execute()) {
        header('Location: book.php');
        echo "<script>alert('Data sent successfully.')</script>";
    } else {
        echo 'Something went wrong! Try again later. Error: ' . $stmt->error;
    }

    $stmt->close();

} else {
    echo '<script>alert("Form was not submitted properly.")</script>';
}

$conn->close();

?>