<?php
function getGeolocationData($apiKey) {
    // IP Geolocation API URL'si
    $url = "https://api.ipgeolocation.io/ipgeo?apiKey={$apiKey}";
   
    // API anahtarınızı buraya yazın
    $apiKey = 'API_ANAHTARINIZI_BURAYA_KOPYALAYIN';

    // cURL ile API'den veri çekme
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo "cURL Hatası: " . curl_error($ch);
        return null;  // cURL hatası varsa null döndür
    }

    curl_close($ch);

    // API'den dönen yanıtı kontrol et
    if (!$response) {
        return null;
    }

    // JSON yanıtını PHP dizisine dönüştür
    $data = json_decode($response, true);

    // Eğer API yanıtı geçerli değilse, null döndür
    if (isset($data['error'])) {
        return null;
    }

    return $data;
}
?>
