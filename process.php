<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formularz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$imie = mysqli_real_escape_string($conn, $_POST['imie']);
$nazwisko = mysqli_real_escape_string($conn, $_POST['nazwisko']);
$datau = mysqli_real_escape_string($conn, $_POST['datau']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$tel = mysqli_real_escape_string($conn, $_POST['tel']);
$woje = mysqli_real_escape_string($conn, $_POST['woje']);
$plec = mysqli_real_escape_string($conn, $_POST['plec']);
$newsletter = isset($_POST['newsletter']) ? 1 : 0;

$sql = "INSERT INTO users (imie, nazwisko, data_ur, email, tel, wojewodztwo, plec, newsletter)
        VALUES ('$imie', '$nazwisko', '$datau', '$email', '$tel', '$woje', '$plec', '$newsletter')";

if ($conn->query($sql) === TRUE) {
    echo "Rejestracja zakończona pomyślnie!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>