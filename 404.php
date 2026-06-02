<?php
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Halaman Tidak Ditemukan - <?= SITE_NAME ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .error-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 50px 40px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            width: 100%;
            max-width: 500px;
            color: white;
            text-align: center;
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
        }

        .error-code {
            font-size: 100px;
            font-weight: 800;
            letter-spacing: 2px;
            background: linear-gradient(to right, #ffd700, #ff8c00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
            line-height: 1;
        }

        .error-emoji {
            font-size: 72px;
            margin-bottom: 20px;
            animation: bounce 2s infinite ease-in-out;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .error-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .error-message {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: #ffd700;
            color: #764ba2;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.4);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 215, 0, 0.6);
            background: #ffe033;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <div class="error-emoji">🔌</div>
        <div class="error-code">404</div>
        <h1 class="error-title">Halaman Tidak Ditemukan</h1>
        <p class="error-message">
            Ups! Halaman yang Anda cari tidak ada, telah dihapus, atau sirkuit koneksinya terputus. Mari kembali ke halaman utama toko.
        </p>
        <a href="<?= SITE_URL ?>/index.php" class="btn">Kembali ke Beranda</a>
    </div>
</body>

</html>
