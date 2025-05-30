<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Employer;
use Illuminate\View\View;

class EmployerController extends Controller
{
    public function search(): \Illuminate\Contracts\View\View
    {
        return view('employer.search', [
            'employers' => Employer::with('jobs')->where('name', 'LIKE', '%'.request('query').'%')->latest()->paginate(10),
            'query' => request('query'),
            'country' => new Country()
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('employer.index', [
            'employers' => Employer::with('jobs')->latest()->paginate(10),
            'country' => new Country()
        ]);
    }

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
