<?php

namespace App\Http\Middleware;

use Closure;
use App\visitorCounter;
use Illuminate\Support\Facades\Mail;

class VisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $url = $request->url();

        visitorCounter::create([
            'from' => url()->previous(),
            'to' => $url,
            'ip' => $request->ip(),
            'action' => $request->method(),
        ]);
        return $next($request);
    }
}
