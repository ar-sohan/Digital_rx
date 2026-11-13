<?php

namespace App\Http\Controllers;

use App\Models\Doctor;


class DoctorController extends Controller
{
    // List all doctors
    public function index()
    {
        $doctors = Doctor::orderBy('id', 'desc')->paginate(10);

        return view('doctors.index', compact('doctors'));
    }
}