<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->isSuperAdmin()) {
            return view('dashboard.superadmin');
        }

        if ($user->isSeller()) {
            return view('dashboard.seller');
        }

        return view('dashboard.customer');
    }
}