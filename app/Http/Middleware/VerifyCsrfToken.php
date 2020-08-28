<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        // aqui le estoy diciendo que no verifique con \csrf_field a 
        // la ruta registro_socio,esto puede ser malo por cuestiones de seguridad en la pagina
        // espero encontrar otra solucion :´v
        'registro_socio/*',
    ];
}


