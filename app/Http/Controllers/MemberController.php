<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $party = $request->input('party');
        $constituency = $request->input('constituency');

        $members = Member::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%");
        })
        ->when($party, function ($query, $party) {
            return $query->where('party', $party);
        })
        ->when($constituency, function ($query, $constituency) {
            return $query->where('constituency', $constituency);
        })
        ->paginate(10);

        // Get unique parties and constituencies for filters
        $parties = Member::distinct()->pluck('party');
        $constituencies = Member::distinct()->pluck('constituency');

        return view('members.index', compact('members', 'parties', 'constituencies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:225',
            'party' => 'required|string|max:225',
            'constituency' => 'required|string|max:225',
            'dob' => 'required|date',
            'civil_status' => 'required|string|max:225',
            'bio' => 'nullable|string|max:1000',
        ]);

        // Create the member, excluding _token
        Member::create($request->except('_token'));

        // Redirect to the members list with a success message
        return redirect()->route('members.create')->with('success', "Record for Hon MP {$request->name} was created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'party' => 'required|string|max:225',
            'constituency' => 'required|string|max:225',
            'dob' => 'required|date',
            'civil_status' => 'required|string|max:225',
            'bio' => 'nullable|string|max:1000',
        ]);

        $member->update($request->except('_token'));

        return redirect()->route('members.show',$member->id)->with('success', "Record for Hon MP {$request->name} updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('members.index')->with('success',"Record for Hon MP {$member->name} deleted successfully");
    }
}
