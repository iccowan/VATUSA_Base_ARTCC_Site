<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use Illuminate\Support\Facades\App;

class HttpsProtocol {

    public function handle($request, Closure $next) {
        if (!$request->secure() && Config::get('app.https_force') == 1) {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
