<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Tag $tag): View
    {
        return view('tag.show', [
            'tag' => $tag,
            'jobs' => $tag->jobs()->with('employer')->with('tags')->latest()->paginate(10)
        ]);
    }
}
