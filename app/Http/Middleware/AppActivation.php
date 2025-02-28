<?php

namespace App\Http\Middleware;

use App\Model\BusinessSetting;
use Brian2694\Toastr\Facades\Toastr;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AppActivation
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param $app_id
     * @return RedirectResponse|mixed
     */
    public function handle(Request $request, Closure $next, $app_id)
    {
		return $next($request);
    }
}
