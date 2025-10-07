<?php
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = LaravelApplication::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    });

// FORZAR STORAGE TEMPORAL PARA VERCEL
$app->useStoragePath(sys_get_temp_dir() . '/laravel/storage');

return $app->create();
