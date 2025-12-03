<?php
namespace App\Libraries;

class CloudinaryService {
  public function upload($filePath) {
    $cloudName = getenv('CLOUDINARY_CLOUD_NAME');
    $uploadPreset = getenv('CLOUDINARY_PRESET');

    if (!$cloudName || !$uploadPreset) {
      return null;
    }

    $url = "https://api.cloudinary.com/v1_1/$cloudName/image/upload";
    $postFields = [
      'file' => new \CURLFile($filePath),
      'upload_preset' => $uploadPreset,
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $result = curl_exec($ch);
    curl_close($ch);

    $json = json_decode($result, true);
    return $json['secure_url'] ?? null;
  }
}