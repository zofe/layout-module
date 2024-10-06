<?php

namespace App\Modules\Layout\Http\Middleware;

use Closure;

class LayoutByConfig
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        return $next($request);

    }
}
