<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $conn = new mysqli('localhost', 'root', '', 'projectweb');

    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (firstName, lastName, gender, email, password, phone) VALUES (?, ?, ?, ?, ?, ?)");

        if ($stmt === false) {
            die("Prepare Failed: " . $conn->error);
        }

        $stmt->bind_param("ssssss", $firstName, $lastName, $gender, $email, $password, $phone);

        if ($stmt->execute()) {
            echo "Registration successful...";
        } else {
            echo "Execution Failed: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
} else {
    echo "Invalid request method.";
}
?>
