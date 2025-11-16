<?php
// Router script for PHP built-in server
// This ensures index.html is served as default and handles routing

$requestUri = $_SERVER['REQUEST_URI'];
$requestPath = parse_url($requestUri, PHP_URL_PATH);

// Remove leading slash
$requestPath = ltrim($requestPath, '/');

// If root or empty, serve index.html
if (empty($requestPath) || $requestPath === '/') {
    $requestPath = 'index.html';
}

// Get the file path
$filePath = __DIR__ . '/' . $requestPath;

// If file exists and is readable, serve it
if (file_exists($filePath) && is_file($filePath)) {
    // Set appropriate content type
    $ext = pathinfo($filePath, PATHINFO_EXTENSION);
    $mimeTypes = [
        'html' => 'text/html',
        'css' => 'text/css',
        'js' => 'application/javascript',
        'json' => 'application/json',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'php' => 'application/x-httpd-php',
    ];
    
    $contentType = $mimeTypes[$ext] ?? 'application/octet-stream';
    header('Content-Type: ' . $contentType);
    
    // For PHP files, let PHP handle them
    if ($ext === 'php') {
        return false; // Let PHP built-in server handle it
    }
    
    // For other files, read and output
    readfile($filePath);
    return true;
}

// If file doesn't exist, try index.html
if ($requestPath !== 'index.html') {
    $indexPath = __DIR__ . '/index.html';
    if (file_exists($indexPath)) {
        header('Content-Type: text/html');
        readfile($indexPath);
        return true;
    }
}

// File not found
http_response_code(404);
echo "404 - File not found: " . htmlspecialchars($requestPath);
return true;

