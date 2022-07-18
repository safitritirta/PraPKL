<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $S = Staff::all();
        return view('Staff.index', compact('S'));
    }
}
