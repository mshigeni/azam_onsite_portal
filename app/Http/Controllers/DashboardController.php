<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        // Check if the user is authenticated
        //if (Auth::check()) {
        if (session('active') == 1) {
            // Retrieve the authenticated user
            //$user = Auth::user();
            $first_name = session('first_name')." ".session('last_name');
            $balance = 0.0;
            $currency = "TZS";
            
            $summary = TaarifaBinafsi::selectRaw("
                        SUM(CASE WHEN namba_jeshi LIKE 'P%' OR namba_jeshi LIKE 'PW%' THEN 1 ELSE 0 END) as maafisa,
                        SUM(CASE WHEN namba_jeshi LIKE 'MT%' OR namba_jeshi LIKE 'MTM%' THEN 1 ELSE 0 END) as askari,
                        COUNT(*) as jumla")->first();

            return view('layouts.dashboard', [
                "first_name" => $first_name, 
                "balance" => $balance,
                "currency" => $currency,
                "summary" => $summary,
            ]);
            // Use $user as needed (e.g., pass it to a view)
           // return view('user-info', ['user' => $user]);
        } else {
            // Redirect or handle the case when the user is not authenticated
            return redirect()->route('logout');
        }   
    }
}
