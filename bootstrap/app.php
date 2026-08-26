<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

// 1. Tangkap aplikasi ke dalam variabel $app
$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn(Request $request) => $request->is('api/*'),
        );
    })->create();

// 2. --- SISIPKAN PENGATURAN VERCEL DI SINI ---
if (isset($_ENV['APP_STORAGE_PATH'])) {
    $app->useStoragePath($_ENV['APP_STORAGE_PATH']);
}
// ---------------------------------------------

// 3. Kembalikan aplikasinya
return $app;
