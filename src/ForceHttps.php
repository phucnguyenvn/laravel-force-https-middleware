<?php 

namespace phucnguyenvn\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class ForceHttps {
    public function handle($request, Closure $next)
    {
        if (!$request->secure() && App::environment() === 'production') {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request); 
    }
}