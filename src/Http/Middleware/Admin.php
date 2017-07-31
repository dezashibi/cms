<?php namespace Dezashibi\Cms\Http\Middleware;

use Closure;

class Admin
{
    public function handle($request , Closure $next , $protected = null)
    {
        if($protected == 'protected')
            return redirect('/');

            
        return $next($request);
    }
}