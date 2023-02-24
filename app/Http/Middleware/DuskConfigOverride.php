<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DuskConfigOverride
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('duskconfig')) {
            $config = $request->get('duskconfig');

            if ($config) {
                $config = json_decode($config, true);

                if (is_array($config)) {
                    foreach($config as $key => $value) {
                        config()->set($key, $value);
                    }
                }
            }
        }
        
        return $next($request);
    }
}
