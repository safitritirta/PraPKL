<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StaffBranch;
use App\Models\Staff;
use App\Models\Branch;

class StaffBranchController extends Controller
{
    public function index()
    {
        $SB = StaffBranch::all();
        $S = Staff::all();
        $B = Branch::all();
        return view('StaffBranch.index', compact('SB', 'S', 'B'));
    }
}