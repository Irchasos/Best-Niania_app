<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Guardian;

use Illuminate\Support\Facades\DB;

class MainPageController extends Controller
{
    public function index()
    {
        $top_guard = DB::table('guardians')->orderBy('votes', 'desc')->first();
        $latest_user = User::where('guardian', 0)->orderBy('created_at', 'desc')->first();
        $latest_guardian = Guardian::orderBy('created_at', 'desc')->first();

        return view('index', compact('top_guard', 'latest_user', 'latest_guardian'));
    }

    public function version()
    {
        return view('version');
    }
}