<!DOCTYPE html>
<html>
<title>PROFIL SAYA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/profil.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


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
                <h1>SELAMAT DATANG DI PROFIL SAYA</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Profil Saya</h1>
        {{-- <img src="https://via.placeholder.com/150" alt="Foto Profil" class="profile-img"> --}}
        <img src="img/satu.jpg" alt="Foto Profil" class="profile-img">

        <div class="profile-info">
            <p>Nama: DANI NUGROHO WICAKSONO</p>
            <p>Umur: 21 tahun</p>
            <p>Lokasi: Jawa Tengah, Sukoharjo</p>
            <p>Email: daninugrohowicaksono433@gmail.com</p>
        </div>
    </div>
    <script src="js/navbar.js"></script>
</body>

</html>
