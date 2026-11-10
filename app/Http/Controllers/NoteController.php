<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = [
            'programmēt',
            'iet gulēt',
        ];

        return view('index', ['notes' => $notes]);
    }
}
