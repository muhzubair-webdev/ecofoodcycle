<?php

// Vercel Serverless Bootstrap for Laravel
// Vercel's filesystem is read-only except /tmp

// 1. Define writable storage path
$storagePath = '/tmp/storage';

// 2. Create required storage subdirectories
$dirs = [
    $storagePath . '/app/public',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/testing',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// 3. Set environment variable so Laravel uses /tmp/storage
$_ENV['APP_STORAGE_PATH'] = $storagePath;
$_SERVER['APP_STORAGE_PATH'] = $storagePath;
putenv("APP_STORAGE_PATH={$storagePath}");

// 4. Forward to Laravel's entry point
require __DIR__ . '/../public/index.php';
