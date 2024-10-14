<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Syerin Anandra</title>
    <style>
        /* CSS untuk styling umum */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff; /* Warna background lembut */
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Styling sidebar navigasi */
        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #4caf50; /* Warna hijau segar untuk sidebar */
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
            background-color: #388e3c; /* Warna hijau lebih gelap saat hover */
        }

        /* Konten utama */
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
            color: #388e3c; /* Warna hijau gelap */
            margin-bottom: 20px;
        }

        .profile-container p {
            font-size: 18px;
            color: #666;
            margin: 10px 0;
            line-height: 1.8;
        }

        /* Styling untuk link di biodata */
        .profile-container p strong {
            color: #4caf50; /* Warna hijau segar untuk highlight */
        }

        /* Footer styling */
        .footer {
            background-color: #4caf50;
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
    <!-- Sidebar Navigasi -->
    <div class="sidebar">
        <a href="#home">Home</a>
        <a href="#biodata">Biodata</a>
        <a href="#kontak">Kontak</a>
    </div>

    <!-- Konten Utama -->
    <div class="content">
        <!-- Home -->
        <div class="profile-container" id="home">
            <h2>Selamat Datang di Profil Syerin Anandra</h2>
            <p>Ini adalah laman yang berisi biodata singkat dari Syerin Anandra. Silakan jelajahi menu untuk melihat informasi lengkapnya.</p>
        </div>

        <!-- Biodata -->
        <div class="profile-container" id="biodata">
            <h2>Biodata</h2>
            <?php
            // PHP untuk menampilkan biodata
            $nama = "Syerin Anandra";
            $umur = 16;
            $hobi = "Nonton";
            $tanggal_lahir = "01-02-2008";

            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Umur:</strong> $umur tahun</p>";
            echo "<p><strong>Hobi:</strong> $hobi</p>";
            echo "<p><strong>Tanggal Lahir:</strong> $tanggal_lahir</p>";
            ?>
        </div>

        <!-- Kontak -->
        <div class="profile-container" id="kontak">
            <h2>Kontak</h2>
            <p>Email: syerin.anandra@example.com</p>
            <p>Instagram: @syerin_anandra</p>
            <p>Nomor HP: 081234567890</p>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 Profil Syerin Anandra - All Rights Reserved
    </div>
</body>
</html>
