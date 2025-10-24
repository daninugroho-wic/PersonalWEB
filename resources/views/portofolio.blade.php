<!DOCTYPE html>
<html>
<title>HALAMAN PORTOFOLIO</title>
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
        <a href="/portofolio" class="w3-bar-item w3-button">Halaman portofolio</a>
        <a href="/rekap" class="w3-bar-item w3-button">Halaman rekap</a>
        <a href="/cv" class="w3-bar-item w3-button">Halaman cv</a>
        <a href="/about" class="w3-bar-item w3-button">Halaman About</a>
    </div>

    <div id="main">
        <div class="w3-teal">
            {{-- <button class="w3-button w3-large w3-right" onclick="logout()"><i class="fas fa-sign-out-alt"></i></button> --}}
            <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1>SELAMAT DATANG DI PORTOFOLIO</h1>
            </div>

        </div>
    </div>

    <script src="js/navbar.js"></script>
</body>

<body>

    <body>
        <header>
            <h1>Nama Anda</h1>
            <p>Web Developer | Designer | Programmer</p>
        </header>

        <section id="about">
            <h2>Tentang Saya</h2>
            <p>Saya adalah seorang pengembang web dengan pengalaman dalam membangun aplikasi web yang responsif dan
                user-friendly.</p>
        </section>

        <section id="portfolio">
            <h2>Portofolio</h2>
            <div class="portfolio-item">
                <h3>Proyek 1</h3>
                <p>Deskripsi singkat tentang proyek ini.</p>
            </div>
            <div class="portfolio-item">
                <h3>Proyek 2</h3>
                <p>Deskripsi singkat tentang proyek ini.</p>
            </div>
            <div class="portfolio-item">
                <h3>Proyek 3</h3>
                <p>Deskripsi singkat tentang proyek ini.</p>
            </div>
        </section>

        <section id="contact">
            <h2>Kontak</h2>
            <p>Email: <a href="mailto:emailanda@example.com">emailanda@example.com</a></p>
            <p>Telepon: 123-456-7890</p>
        </section>

        <footer>
            <p>&copy; 2024 Nama Anda. Semua hak dilindungi.</p>
        </footer>
    </body>
</body>

<style>
    /* Reset default browser styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* background pling belakang */
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        background: url(img/background.jpg);
    }

    header {
        background: #333;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    header h1 {
        margin-bottom: 10px;
        font-size: 2.5em;
    }

    header p {
        font-size: 1.2em;
    }

    section {
        padding: 20px;
        margin: 20px 0;
        background-color: transparent rgb(11, 197, 144);
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    section h2 {
        margin-bottom: 15px;
        color: #333;
    }

    .portfolio-item {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .portfolio-item h3 {
        margin-bottom: 5px;
        color: #007BFF;
    }

    .portfolio-item p {
        font-size: 0.9em;
    }

    #contact p {
        margin: 10px 0;
    }

    footer {
        text-align: center;
        padding: 10px 0;
        background: #333;
        color: #fff;
        margin-top: 20px;
        border-top: 1px solid #ddd;
    }

    footer p {
        font-size: 0.9em;
    }

    .w3-teal {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px;
    }

    .w3-button.w3-large {
        font-size: 24px;
        margin-left: 10px;
    }

    .w3-container {
        flex-grow: 1;
        text-align: left;
    }
</style>

</html>
