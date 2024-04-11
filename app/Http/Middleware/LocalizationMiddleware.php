<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{
    public function handle($request, Closure $next): Response
    {
        // Check if Accept-Language header is present
        if ($request->hasHeader('Accept-Language')) {
            // Set locale from Accept-Language header
            App::setLocale($request->header('Accept-Language'));
        }

        // Check if session has lang set
        if (Session::has('lang')) {
            // Set locale from session
            App::setLocale(Session::get('lang'));
        }

        return $next($request);
    }
}
