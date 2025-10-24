<!DOCTYPE html>
<html>
<title>HOME (UTAMA)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="css/home.css">


<body>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
        <a href="/" class="w3-bar-item w3-button">Home</a>
        <a href="/profil" class="w3-bar-item w3-button">Halaman Saya</a>
        <a href="/project" class="w3-bar-item w3-button">Halaman project</a>
        <a href="/portofolio" class="w3-bar-item w3-button">Halaman portofolio</a>
        <a href="/rekap" class="w3-bar-item w3-button">Halaman rekap</a>
        <a href="/cv" class="w3-bar-item w3-button">Halaman cv</a>
        <a href="/about" class="w3-bar-item w3-button">Halaman About</a>
    </div>

    <div id="main">

        <div class="w3-teal">
            <button class="w3-button w3-large w3-right" onclick="logout()"><i class="fas fa-sign-out-alt"></i></button>

            <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button><input
                type="text" placeholder="Search..">
            <div class="w3-container">
                <h1>SELAMAT DATANG</h1>
            </div>
        </div>


        <body>
            <div class="background"></div>
            <div class="content">
                <h1>Selamat Datang di Halaman Home</h1>
                <p>Jangan lupa baca bismillah</p>
            </div>
        </body>

    </div>
    <script src="js/navbar.js"></script>
</body>

</html>
