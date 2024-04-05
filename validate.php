<?php
// Validasi apakah metode permintaan adalah POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil nilai email, password, dan status rememberMe dari data POST
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kredensial yang valid
    $validCredentials = [
        'email' => 'casebasedke3@gmail.com',
        'password' => 'Casebased3!',
        'fullName' => 'Kelompok Delapan',
        'username' => 'Tim8',
        'description' => 'Description Profile.'
    ];

    // Validasi kredensial
    // Check if the email and password match the database
    if ($email === $validCredentials['email'] && $password === $validCredentials['password']) {
        // Start the session and set the loggedIn flag
        session_start();
        $_SESSION['loggedIn'] = true;
        echo 'success';
        exit;
    } else {
        echo 'error';
    }
} else{ echo 'error';}
