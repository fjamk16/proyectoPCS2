<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * La lista de middleware global de la aplicación.
     *
     * @var array
     */
    protected $middleware = [
        'role' => \App\Http\Middleware\RoleMiddleware::class,
    ];
}
