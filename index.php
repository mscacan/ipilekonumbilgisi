<?php
require_once 'api.php';

// API anahtarınızı buraya yazın
$apiKey = 'API_ANAHTARINIZI_BURAYA_KOPYALAYIN';

// IP Geolocation verilerini al
$geolocation = getGeolocationData($apiKey);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>IP Geolocation - Konum Bilgisi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IP Geolocation API ile IP adresinin konum bilgilerini öğrenin.">
    <meta name="generator" content="Mehmet Şerif ÇAÇAN - github.com/mscacan" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center">🌍 IP Geolocation - Konum Bilgisi</h1>

    <?php if ($geolocation): ?>
        <div class="list-group">
            <div class="list-group-item mb-3 shadow-sm rounded">
                <h5 class="mb-1">Ülke: <?= htmlspecialchars($geolocation['country_name']) ?></h5>
                <p><strong>Şehir:</strong> <?= htmlspecialchars($geolocation['city']) ?></p>
                <p><strong>IP Adresi:</strong> <?= htmlspecialchars($geolocation['ip']) ?></p>
                <p><strong>Latitude:</strong> <?= htmlspecialchars($geolocation['latitude']) ?></p>
                <p><strong>Longitude:</strong> <?= htmlspecialchars($geolocation['longitude']) ?></p>
                <p><strong>ISP:</strong> <?= htmlspecialchars($geolocation['isp']) ?></p>
                <p><strong>Zaman Dilimi:</strong> 
                    <?php
                        echo isset($geolocation['timezone']) ? htmlspecialchars($geolocation['timezone']) : 'Bilinmiyor';
                    ?>
                </p>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-warning">
            Konum bilgisi alınamadı. Lütfen tekrar deneyin.
        </div>
    <?php endif; ?>
</div>

</body>
</html>
