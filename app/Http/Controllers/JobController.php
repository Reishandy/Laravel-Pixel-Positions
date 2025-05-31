<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function search(): View
    {
        return view('job.search', [
            'jobs' => Job::with('employer')->with('tags')->where('title', 'LIKE', '%'.request('query').'%')->latest()->paginate(10),
            'query' => request('query')
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('job.index', [
            'jobs' => Job::with('employer')->with('tags')->latest()->paginate(10),
            'featuredJobs' => Job::with('employer')->with('tags')->where('featured', true)->latest()->get(),
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('job.create', [
            'country_code' => Auth::user()->employer->country_code,
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // Create the job
        $job = new Job([
            'title' => $validated['title'],
            'salary' => $validated['salary'],
            'currency' => Auth::user()->employer->currency,
            'location' => $validated['location'],
            'url' => $validated['url'],
            'schedule' => $validated['schedule'],
            'featured' => isset($validated['featured']) ? true : false,
        ]);

        // Associate with employer
        $job->employer()->associate(Auth::user()->employer);
        $job->save();

        // Attach tags if any
        if (isset($validated['tags'])) {
            $job->tags()->attach($validated['tags']);
        }

        return redirect()->route('home')->with('success', 'Job posted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job): View
    {
        return view('job.edit', [
            'job' => $job,
            'country_code' => Auth::user()->employer->country_code,
            'tags' => Tag::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job): RedirectResponse
    {
        $validated = $request->validated();

        // Update the job attributes
        $job->title = $validated['title'];
        $job->salary = $validated['salary'];
        $job->location = $validated['location'];
        $job->url = $validated['url'];
        $job->schedule = $validated['schedule'];
        $job->featured = isset($validated['featured']) ? true : false;

        $job->save();

        // Sync tags if any
        if (isset($validated['tags'])) {
            $job->tags()->sync($validated['tags']);
        } else {
            // Remove all tags if none are selected
            $job->tags()->detach();
        }

        return redirect()->route('home')->with('success', 'Job updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job): RedirectResponse
    {
        // Delete the job
        $job->delete();

        return redirect()->route('home')->with('success', 'Job deleted successfully!');
    }
}
