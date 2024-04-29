<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

</head>

<body>

    <!-- NavBar Start -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand me-auto" href="index.php">
                <img class="logo rounded" src="pic/main_logo.jpg" alt="Main Logo" width="50" height="50">
                Health Care Service
            </a>

            <!-- Off canvas start -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- Offcanvas Body -->
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Staff Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Service Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Client Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Facility Management</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="login-btn">Login</a>

            <!-- Navbar toggle button -->
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- NavBar End -->