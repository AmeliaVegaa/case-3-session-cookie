<?php 
session_start();

if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
    header('Location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body class="bg-light">

    <?php include ('header.php') ?>

    <main class="container py-5 mt-4">
    <div class="d-flex justify-content-between">
        <div class="card shadow-lg rounded" style="width: 500px;">
            <div class="card-body">
                <img src="https://i.pinimg.com/564x/96/6b/8c/966b8c40f54adeeb0614ce21bc506907.jpg" class="d-block mb-4 img-fluid square" alt="profile_img" style="width: 400px; height: 400px;">
            </div>
        </div>
        <div class="card shadow-lg rounded" style="flex-grow: 1;">
            <div class="card-body">
                <h3 class="text-center mb-3">Kelompok Delapan</h3>
                <p class="text-center">deskripsi profil</p>
            </div>
        </div>
    </div>
</main>

    <?php include ('footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
