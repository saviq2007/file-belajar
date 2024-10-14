<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Aby Putra Orabowo</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #d7ccc8; /* Warna cream lembut */
            margin: 0;
            padding: 0;
            color: #5d4037; /* Warna coklat tua */
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #795548; /* Warna coklat pekat */
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            color: #fff;
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #5d4037; /* Warna coklat lebih tua */
        }

        .content {
            margin-left: 220px;
            padding: 40px;
        }

        .profile-container {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 30px auto;
            text-align: center;
        }

        .profile-container h2 {
            color: #5d4037; /* Warna coklat tua */
            margin-bottom: 20px;
        }

        .profile-container p {
            font-size: 18px;
            color: #6d4c41; /* Warna coklat medium */
            margin: 10px 0;
            line-height: 1.8;
        }

        .profile-container p strong {
            color: #8d6e63; /* Warna coklat lebih lembut */
        }

        .footer {
            background-color: #795548;
            color: #fff;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
            left: 220px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#home">Home</a>
        <a href="#biodata">Biodata</a>
        <a href="#kontak">Kontak</a>
    </div>

    <div class="content">
        <div class="profile-container" id="home">
            <h2>Selamat Datang di Profil Aby Putra Orabowo</h2>
            <p>Aby Putra Orabowo ingin menjadi seorang pro player di masa depan.</p>
        </div>

        <div class="profile-container" id="biodata">
            <h2>Biodata</h2>
            <?php
            $nama = "Aby Putra Orabowo";
            $umur = 17;
            $hobi = "Main game";
            $cita_cita = "Pro player";
            
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Umur:</strong> $umur tahun</p>";
            echo "<p><strong>Hobi:</strong> $hobi</p>";
            echo "<p><strong>Cita-cita:</strong> $cita_cita</p>";
            ?>
        </div>

        <div class="profile-container" id="kontak">
            <h2>Kontak</h2>
            <p>Email: aby.orabowo@example.com</p>
            <p>Instagram: @aby_orabowo</p>
            <p>Nomor HP: 081234567892</p>
        </div>
    </div>

    <div class="footer">
        &copy; 2024 Profil Aby Putra Orabowo - All Rights Reserved
    </div>
</body>
</html>
