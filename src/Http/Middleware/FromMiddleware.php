<?php

namespace csi0n\From\Http\Middleware;

use Closure;
use FromRepository;

class FromMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $activity_id)
    {
        $from = $request->get('from', '');
        if ($from) {
            FromRepository::save($activity_id, $from);
            session()->put('from', $from);
        }
        return $next($request);
    }
}
