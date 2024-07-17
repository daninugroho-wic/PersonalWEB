function loadContent(url) {
    // Gunakan Ajax untuk memuat konten Blade
    fetch(url)
        .then(response => response.text())
        .then(data => {
            // Masukkan konten Blade ke dalam div #content
            document.getElementById('content').innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
}