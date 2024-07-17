<!DOCTYPE html>
<html>
<title>HALAMAN PROJECT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/nav_project.css">

<body>

    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
        <a href="/" class="w3-bar-item w3-button">Home</a>
        <a href="/profil" class="w3-bar-item w3-button">Halaman Saya</a>
        <a href="/project" class="w3-bar-item w3-button">Halaman project</a>
        <a href="/quotes" class="w3-bar-item w3-button">Halaman quotes</a>
        <a href="/rekap" class="w3-bar-item w3-button">Halaman rekap</a>
        <a href="/cv" class="w3-bar-item w3-button">Halaman cv</a>
        <a href="/about" class="w3-bar-item w3-button">Halaman About</a>
    </div>

    <div id="main">
        <div class="w3-teal">
            <button class="w3-button w3-large w3-right" onclick="logout()"><i class="fas fa-sign-out-alt"></i></button>
            <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1>SELAMAT DATANG DI PROJECT</h1>
                <!-- Navbar horizontal -->
                <div class="navbar">
                    <a href="/project">Kembali</a>
                    <a onclick="loadContent('/crud')">CRUD</a>
                    <a onclick="loadContent('/kalkulator')">KALKULATOR</a>
                    <a onclick="loadContent('/sticky')">STICKY NOTE</a>
                </div>
            </div>

        </div>
    </div>

    <div id="content"></div>
    <script src="js/navbar.js"></script>
    <script src="js/content_project.js"></script>
</body>

</html>