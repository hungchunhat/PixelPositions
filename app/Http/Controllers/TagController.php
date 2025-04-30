<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $jobs = $tag->jobs()->get();//or u can do this $tag->jobs
        return view('results', ['jobs' => $jobs]);
    }
}
