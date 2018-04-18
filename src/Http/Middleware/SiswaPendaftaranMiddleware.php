<?php namespace Bantenprov\SiswaPendaftaran\Http\Middleware;

use Closure;

/**
 * The SiswaPendaftaranMiddleware class.
 *
 * @package Bantenprov\SiswaPendaftaran
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class SiswaPendaftaranMiddleware
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
        return $next($request);
    }
}
