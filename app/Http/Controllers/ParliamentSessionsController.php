<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParliamentSession;

class ParliamentSessionsController extends Controller
{
    public function index(){
        $parliamentSessions = ParliamentSession::all();

        return view('parliament_sessions.index', compact('parliamentSessions'));
    }
}
