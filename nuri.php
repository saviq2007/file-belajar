<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil M. Nuriana B</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa; /* Warna biru terang */
            margin: 0;
            padding: 0;
            color: #333;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #03a9f4; /* Warna biru segar */
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
            background-color: #0288d1; /* Warna biru lebih gelap */
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
            color: #0288d1; /* Warna biru gelap */
            margin-bottom: 20px;
        }

        .profile-container p {
            font-size: 18px;
            color: #666;
            margin: 10px 0;
            line-height: 1.8;
        }

        .profile-container p strong {
            color: #03a9f4; /* Warna biru terang */
        }

        .footer {
            background-color: #03a9f4;
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
            <h2>Selamat Datang di Profil M. Nuriana B</h2>
            <p>Profil singkat dari M. Nuriana B, seorang yang bercita-cita menjadi kuli.</p>
        </div>

        <div class="profile-container" id="biodata">
            <h2>Biodata</h2>
            <?php
            $nama = "M. Nuriana B";
            $umur = 17;
            $hobi = "Main game";
            $cita_cita = "Kuli";
            
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Umur:</strong> $umur tahun</p>";
            echo "<p><strong>Hobi:</strong> $hobi</p>";
            echo "<p><strong>Cita-cita:</strong> $cita_cita</p>";
            ?>
        </div>

        <div class="profile-container" id="kontak">
            <h2>Kontak</h2>
            <p>Email: nuriana.b@example.com</p>
            <p>Instagram: @nuriana_b</p>
            <p>Nomor HP: 081234567890</p>
        </div>
    </div>

    <div class="footer">
        &copy; 2024 Profil M. Nuriana B - All Rights Reserved
    </div>
</body>
</html>
