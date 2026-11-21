<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CanManage
{
    /** Role yang boleh menambah, mengubah, dan menghapus data */
    public const ROLES = ['admin', 'staff'];

    public function handle(Request $request, Closure $next): Response
    {
        $role = strtolower(trim((string) ($request->user()?->role)));

        if (! in_array($role, self::ROLES, true)) {
            return redirect()
                ->route('dashboard')
                ->with('error', 'Anda hanya dapat melihat data. Fitur ini khusus admin dan staff.');
        }

        return $next($request);
    }
}