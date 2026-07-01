<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->isSuperAdmin()) {

            $totalUsers = User::count();

            $totalCustomers = User::where('role', 'customer')->count();

            $totalSellers = User::where('role', 'seller')->count();

            $totalServices = Service::count();

            return view('dashboard.superadmin', compact(
                'totalUsers',
                'totalCustomers',
                'totalSellers',
                'totalServices'
            ));
        }

        if ($user->isSeller()) {

            $services = $user->services()
                ->latest()
                ->get();

            return view('dashboard.seller', compact('services'));
        }

        return view('dashboard.customer');
    }
}