<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Research;
use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.research.index", [
            'researchs' => Research::orderBy("id", "DESC")->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.research.create");
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

            $image->storeAs('public/ResearchImage', $research_image);

            $data['image'] = 'ResearchImage/' . $research_image;
        }
        $data['created_at'] = now();

        $store = Research::create($data);
        if ($store) {
            return redirect('admin/researches')->with('msg', 'New Research Inserted Successfully');
        } else {
            return redirect()->back()->with('msg', 'Some Error Occur!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        return view('admin.research.edit', [
            'research' => Research::where('slug', $slug)->first(),
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

        $research = Research::where('slug', $slug)->firstOrFail();

        $mainData = $request->only('title', 'description');
        if ($request->hasFile('image')) {
            if ($research->image) {
                Storage::delete($research->image);
            }
            $image = $request->file('image');
            $research_image = time() . rand(0000, 9999) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/ResearchImage', $research_image);
            $mainData['image'] = 'ResearchImage/' . $research_image;
        }
        $research->update($mainData);

        return redirect()->route('researches.index')->with('msg', 'Research updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $deleteResearch = Research::where('slug', $slug)->first();
        $deleteResearch->delete();
        return redirect()->route('researches.index')->with('msg', 'Research Has Been Successfully.');
    }
}
