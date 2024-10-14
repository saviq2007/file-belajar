<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Ahmad Saviq Firda</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000; /* Warna hitam penuh */
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #b71c1c; /* Warna merah pekat */
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.5);
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
            background-color: #d32f2f; /* Warna merah lebih terang */
        }

        .content {
            margin-left: 220px;
            padding: 40px;
            color: #fff;
        }

        .profile-container {
            background-color: #1c1c1c; /* Warna hitam lembut */
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(255, 0, 0, 0.1);
            max-width: 800px;
            margin: 30px auto;
            text-align: center;
        }

        .profile-container h2 {
            color: #d32f2f; /* Warna merah terang */
            margin-bottom: 20px;
        }

        .profile-container p {
            font-size: 18px;
            color: #ddd;
            margin: 10px 0;
            line-height: 1.8;
        }

        .profile-container p strong {
            color: #ff5252; /* Warna merah lembut */
        }

        .footer {
            background-color: #b71c1c;
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
            <h2>Selamat Datang di Profil Ahmad Saviq Firda</h2>
            <p>Ahmad Saviq Firda memiliki cita-cita besar menjadi Presiden masa depan.</p>
        </div>

        <div class="profile-container" id="biodata">
            <h2>Biodata</h2>
            <?php
            $nama = "Ahmad Saviq Firda";
            $umur = 17;
            $hobi = "Main game";
            $cita_cita = "Presiden";
            
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Umur:</strong> $umur tahun</p>";
            echo "<p><strong>Hobi:</strong> $hobi</p>";
            echo "<p><strong>Cita-cita:</strong> $cita_cita</p>";
            ?>
        </div>

        <div class="profile-container" id="kontak">
            <h2>Kontak</h2>
            <p>Email: saviq.firda@example.com</p>
            <p>Instagram: @saviq_firda</p>
            <p>Nomor HP: 081234567891</p>
        </div>
    </div>

    <div class="footer">
        &copy; 2024 Profil Ahmad Saviq Firda - All Rights Reserved
    </div>
</body>
</html>
