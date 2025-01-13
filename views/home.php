<?php
// home.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama - Daftar Aneka Kuliner</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center; /* Elemen berada di tengah */
            background: linear-gradient(to bottom, #FFC0CB, #ADD8E6); /* Gradasi pink ke biru muda */
            color: #8B4513; /* Warna cokelat untuk teks */
        }
        .welcome-message {
            text-align: center;
            font-size: 28px;
            margin: 20px 0;
            font-weight: bold;
            color: #8B4513; /* Warna cokelat untuk pesan sambutan */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); /* Efek bayangan */
        }
        .image-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 20px auto;
            max-width: 1200px;
            gap: 10px; /* Jarak antar gambar */
        }
        .image-container img {
            width: 30%; /* Lebar gambar agar 3 per baris */
            height: 270px;
            object-fit: cover;
            border-radius: 8px; /* Sudut gambar membulat */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Bayangan gambar */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Efek animasi */
        }
        .image-container img:hover {
            transform: scale(1.05); /* Perbesar gambar saat hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.7); /* Bayangan lebih besar saat hover */
        }
    </style>
</head>
<body>
    <h2 class="welcome-message">Selamat Datang di Daftar Menu Kuliner Kami!</h2>
    <!-- Display Up to 20 Images -->
    <div class="image-container">
        <img src="img/makanan1.jpg" alt="Image 1">
        <img src="img/makanan2.jpg" alt="Image 2">
        <img src="img/makanan3.jpg" alt="Image 4">
        <img src="img/makanan4.jpg" alt="Image 5">
        <img src="img/makanan5.jpg" alt="Image 6">
        <img src="img/makanan6.jpg" alt="Image 7">
        <img src="img/makanan7.jpg" alt="Image 9">
        <img src="img/minuman1.jpg" alt="Image 10">
        <img src="img/minuman2.jpg" alt="Image 11">
        <img src="img/minuman3.jpg" alt="Image 12">
        <img src="img/minuman4.jpg" alt="Image 14">
        <img src="img/minuman5.jpg" alt="Image 16">
        <img src="img/minuman6.jpg" alt="Image 17">
        <img src="img/minuman7.jpg" alt="Image 18">
        <img src="img/minuman8.jpg" alt="Image 19">
    </div>
</body>
</html>
