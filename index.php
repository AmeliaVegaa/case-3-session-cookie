<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    header('Location: profile.php');
    exit;
}

// Check if the "Remember Me" cookie is set
if (isset($_COOKIE['email'])) {
    $rememberEmail = $_COOKIE['email'];
} else {
    $rememberEmail = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <div class="container">
        <form class="form-group" onsubmit="return validateForm()">
            <div class="mb-3 bg p-5 rounded">
                <h2 class=" text-center">LOGIN</h2>
                <label for="exampleFormControlInput1" class="form-label mt-4 fw-semibold">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?php echo htmlspecialchars($rememberEmail); ?>" required>

                <label for="exampleFormControlInput1" class="form-label mt-3 fw-semibold">Password</label>
                <input type="password" class="form-control" id="password" name="password" />

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>

                <input type="submit" class="form-control btn-color mt-3" id="exampleFormControlInput1" value="Login" />

            </div>

        </form>
    </div>
    <div id="errorDialog" class="dialog">
        <p id="errorMessage"></p>
        <button id="closeDialog">Close</button>
    </div>


</body>

</html>
