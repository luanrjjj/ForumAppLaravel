<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ThreadsController extends Controller
{
    //
    public function index()
    {
        $threads = Thread::latest()->get();
        return view( 'threads.index', compact( 'threads' ) );
        
    }
}
