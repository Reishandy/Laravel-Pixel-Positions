<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployerRequest;
use App\Http\Requests\UpdateEmployerRequest;
use App\Models\Employer;
use Illuminate\View\View;

class EmployerController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Employer $employer): View
    {
        return view('employer.show', [
            'employer' => $employer,
            'jobs' => $employer->jobs()->with('employer')->with('tags')->latest()->paginate(10)
        ]);
    }
}
