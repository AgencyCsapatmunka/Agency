<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/api/new_event',
        '/api/update_event_status/*',
        '/api/delete_event/*',
        '/api/new_participate',
        '/api/update_participate_present/*/*',
        '/api/participate_delete/*/*',
        '/api/new_agency',
        '/api/update_agency/*',
        '/api/destroy_agency/*',
        'api/users',
        'api/users/*',
        'api/users_destroyer/*'

    ];
}
