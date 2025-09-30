<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
// use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logout(Request $request)
    {
        //if (Auth::check()) {
        // if (session('active') == 1) {
        //     return redirect()->route('my-forms');
        // }
        Log::debug("LOGOUT!");

        // Clear session data
        $request->session()->flush();

        // Invalidate session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        return view('layouts.login');
    }
}
