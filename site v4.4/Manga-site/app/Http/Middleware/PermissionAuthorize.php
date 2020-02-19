<?php

namespace App\Http\Middleware;

use Closure;

class PermissionAuthorize
{
/**
* Handle an incoming request.
*
* @param \Illuminate\Http\Request $request
* @param \Closure $next
* @return mixed
*/
public function handle($request, Closure $next)
{
$permissions = $this->getRequiredRoleForRoute($request->route());

if($request->user()->hasPermission($permissions) || !$permissions)
{
return $next($request);
}
return abort(401);
}

private function getRequiredRoleForRoute($route)
{
$actions = $route->getAction();
return isset($actions['permissions']) ? $actions['permissions'] : null;
}
}
