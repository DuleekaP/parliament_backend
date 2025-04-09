<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class PartyController extends Controller
{
    //
    public function index()
    {
        $parties =Party::all();
        return view('parties.index', compact('parties'));
    }

}
