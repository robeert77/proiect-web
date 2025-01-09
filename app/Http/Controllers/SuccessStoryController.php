<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuccessStory;
use App\Models\Member;

class SuccessStoryController extends Controller
{
    public function index(Request $request)
    {
        $member_id = $request->query('member_id');
        $query = SuccessStory::query();

        if ($member_id) {
            $query->where('member_id', $member_id);
        }

        $success_stories = $query->with('member')->paginate(10);

        return view('success-stories.index', compact('success_stories'));
    }
    
    public function create()
    {
        return view('success-stories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'          => 'required',
            'story'          => 'required',
            'member_id'      => 'required|exists:members,id',
        ]);

        SuccessStory::create($request->all());

        return redirect()
                ->route('success-stories.index', ['member_id' => $request->member_id])
                ->with('success', 'Story added successfully!');
    }

    public function show(string $id)
    {
        $story = SuccessStory::with('member')->findOrFail($id);
        if (request()->ajax()) {
            return view('success-stories.modal_content', compact('story'));
        }
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $story = SuccessStory::findOrFail($id);
        $story->delete();

        return redirect()
            ->route('success-stories.index', ['member_id' => $story -> member_id])
            ->with('success', 'story deleted successfully!');
    }
}
