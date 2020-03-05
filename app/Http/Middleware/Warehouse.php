<?php
namespace App\Http\Middleware;
use Auth;
use Closure;
class Warehouse  
{
  public function handle($request, Closure $next, $guard = null)
  {
    if (Auth::guard($guard)->guest()) {
        if ($request->ajax()) {
            return response('Unauthorized.', 401);
        } else {
            return redirect()->guest('login');
        }
	} 
    else if (Auth::guard($guard)->user()->role != 4) {
        return redirect()->to('/')->withError('Permission Denied');
    }
    return $next($request);
  }
}