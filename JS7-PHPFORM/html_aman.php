<!DOCTYPE html>
<html>
    <head>
        <title>Form Input Aman</title>
    </head>
    <body>
        <h2>Input Aman</h2>
        <form action="html_aman.php" method="post">
            <label for="input">Masukkan Nama :</label><br>
            <input type="text" id="input" name="input"><br><br>
            <label for="input">Masukkan Email :</label><br>
            <input type="text" id="email" name="email"><br><br>
            <input type="submit" value="Submit">
        </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        if (!empty($input)) {
            echo "<p>Data yang dimasukkan : " . $input . "</p>";
        } else {
            echo "<p>Input tidak boleh kosong!</p>";
        }

        $email = $_POST['email'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email valid: " . $email . "</p>";
        } else {
            echo "<p>Email tidak valid.</p>";
        }
    }
?>