<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StepVerification
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa jika user belum melewati halaman consent
        if (!$request->session()->has('consent_accepted') && $request->path() == 'form') {
            return redirect('/');
        }

        // Periksa jika user belum melewati halaman form
        if (!$request->session()->has('form_submitted') && $request->path() == 'result') {
            return redirect('/');
        }

        return $next($request);
    }
}
