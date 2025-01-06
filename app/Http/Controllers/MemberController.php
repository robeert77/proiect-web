<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(Request $request)
    {
    $query = Member::query();
    if ($request->filled('profession')) {
        $query->where('profession', 'like', '%' . $request->profession . '%');
    }
    if ($request->filled('company')) {
        $query->where('company', 'like', '%' . $request->company . '%');
    }
    if ($request->filled('status')) {
        $query->where('status', $request->status);
    }
    $members = $query->paginate(10);
    return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'email'         => 'required|email|unique:members',
            'profession'    => 'required',
            'linkedin_url'  => 'nullable|url|regex:/^(https?:\/\/)?(www\.)?linkedin\.com\/.*$/i',
        ]);

        Member::create($request->all());

        return redirect()
                ->route('members.index')
                ->with('success', 'Member added successfully!');
    }

    public function edit(string $id)
    {
        $member = Member::findOrFail($id);

        return view('members.edit', compact('member'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'          => 'required',
            'email'         => 'required|email|unique:members,email,' . $id,
            'profession'    => 'required',
            'linkedin_url'  => 'nullable|url',
        ]);

        $member = Member::findOrFail($id);
        $member->update($request->all());

        return redirect()
                ->route('members.index')
                ->with('success', 'Member updated successfully!');
    }

    public function destroy(string $id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return redirect()
            ->route('members.index')
            ->with('success', 'Member deleted successfully!');
    }
}
