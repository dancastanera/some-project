<?php

namespace App\Http\Middleware;

use Closure;

class MustBeDan
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

        $user = $request->user();

        if ($user && $user->email == 'dan@castaneras.com') {

            return $next($request);

        }

        abort(404, 'Access is prohibitted to this section of the website.');
    }


}
