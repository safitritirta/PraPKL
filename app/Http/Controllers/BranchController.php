<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Branch;


class BranchController extends Controller
{
    public function index()
    {
        $B = Branch::all();
        return view('Branch.index', compact('B'));
    }
}
