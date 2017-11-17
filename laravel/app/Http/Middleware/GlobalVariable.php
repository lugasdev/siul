<?php

namespace App\Http\Middleware;

use Closure;
use View;

class GlobalVariable
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
        $this->globalBladeVariable();
        return $next($request);
    }

    private function globalBladeVariable()
    {
        // View::share ( 'variable3', 'I am Data 3' );
    }
}
