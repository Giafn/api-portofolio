<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

/**
 * Parse URL secara aman dan ambil hanya path tanpa query
 * Contoh:
 *   /api/status?x=1  → /api/status
 */
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

/**
 * Semua endpoint harus mulai dengan /api/
 */
$prefix = "/api/";
if (strpos($uri, $prefix) !== 0) {
    http_response_code(404);
    echo json_encode(["error" => "Invalid API path"]);
    exit;
}

/**
 * Ambil bagian setelah /api/
 * Contoh:
 *   /api/user/list → user/list
 */
$filePath = substr($uri, strlen($prefix));
$filePath = trim($filePath, "/");

/**
 * Hindari path traversal
 * user/../../etc/passwd → dibersihkan
 */
$filePath = str_replace("..", "", $filePath);

/**
 * Path file JSON target
 */
$fullPath = __DIR__ . "/data/" . $filePath . ".json";

/**
 * Jika file ada → tampilkan
 */
if (file_exists($fullPath)) {
    echo file_get_contents($fullPath);
    exit;
}

/**
 * Jika file tidak ada → 404
 */
http_response_code(404);
echo json_encode(["error" => "Not found"]);
