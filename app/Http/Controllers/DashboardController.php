<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flat;
use App\Models\Member;
use App\Models\MaintenancePayment;
use App\Models\Complaint;

class DashboardController extends Controller
{
    public function index()
    {
        $flats = Flat::count();
        $members = Member::count();
        $maintenance = MaintenancePayment::where('status','paid')->sum('amount');
        $complaints = Complaint::where('status','pending')->count();

        return view('admin.dashboard', compact('flats','members','maintenance','complaints'));
    }
}