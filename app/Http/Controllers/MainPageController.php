<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MainPageController extends Controller
{
    public function index()
    {
        $top_guard = DB::table('guardians')->orderBy('votes', 'desc')->first();

        return view('index', [
            'top_guard' => $top_guard
        ]);
    }

    public function version()
    {
        return view('version');
    }
}
