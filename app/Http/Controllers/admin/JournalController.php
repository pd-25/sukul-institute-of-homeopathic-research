<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.journal.index", [
            'journal' => Journal::orderBy("id", "DESC")->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("admin.journal.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'string',
            'description' => 'string|max:5000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $data = $request->only('title', 'description', 'image');
        
        if ($request->has('image')) {
            $image = $request->file('image');

            $research_image = time() . rand(0000, 9999) . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/JournalImage', $research_image);

            $data['image'] = 'JournalImage/' . $research_image;
        }
        $data['created_at'] = now();

        $store = Journal::create($data);
        if ($store) {
            return redirect('admin/journal')->with('msg', 'New Journal Inserted Successfully');
        } else {
            return redirect()->back()->with('msg', 'Some Error Occur!');
        }
    }
 
    /**
     * Display the specified resource.
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */    public function edit(string $slug)
    {
        return view('admin.journal.edit', [
            'research' => Journal::where('slug', $slug)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string|max:5000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $research = Journal::where('slug', $slug)->firstOrFail();

        $mainData = $request->only('title', 'description');
        if ($request->hasFile('image')) {
            if ($research->image) {
                Storage::delete($research->image);
            }
            $image = $request->file('image');
            $research_image = time() . rand(0000, 9999) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/JournalImage', $research_image);
            $mainData['image'] = 'JournalImage/' . $research_image;
        }
        $research->update($mainData);

        return redirect()->route('journal.index')->with('msg', 'Journal updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $deleteResearch = Journal::where('slug', $slug)->first();
        $deleteResearch->delete();
        return redirect()->route('journal.index')->with('msg', 'Journal Has Been delete Successfully.');
    }
}
