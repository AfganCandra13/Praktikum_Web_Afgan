<?php
include 'db.php';

$username = "Afgan";
$password = "12345";
$hash = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (username, password) VALUES ('$username', '$hash')";

if (mysqli_query($conn, $query)) {
    echo "User berhasil ditambahkan!";
} else {
    echo "Gagal: " . mysqli_error($conn);
}
?>