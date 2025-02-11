<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first(); // Assuming a single about record
        return view('admin.about.index', compact('about'));
    }

    public function indexOnepage()
    {
        $about = About::first(); // Assuming a single about record
        return view('partials.about', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'features' => 'required|array',
            'ceo_name' => 'required|string|max:255',
            'ceo_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'phone_number' => 'required|string|max:20',
            'years_of_experience' => 'required|integer|min:1',
        ]);

        $data = $request->except('ceo_image');
        if ($request->hasFile('ceo_image')) {
            $data['ceo_image'] = $request->file('ceo_image')->store('about', 'public');
        }

        $data['features'] = json_encode($request->features);
        About::create($data);

        return redirect()->route('about.index')->with('success', 'About section created successfully.');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'features' => 'required|array',
            'ceo_name' => 'required|string|max:255',
            'ceo_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'phone_number' => 'required|string|max:20',
            'years_of_experience' => 'required|integer|min:1',
        ]);

        $data = $request->except('ceo_image');
        if ($request->hasFile('ceo_image')) {
            if ($about->ceo_image) {
                unlink(storage_path('app/public/' . $about->ceo_image));
            }
            $data['ceo_image'] = $request->file('ceo_image')->store('about', 'public');
        }

        $data['features'] = json_encode($request->features);
        $about->update($data);

        return redirect()->route('admin.about.index')->with('success', 'About section updated successfully.');
    }

    public function destroy(About $about)
    {
        if ($about->ceo_image) {
            unlink(storage_path('app/public/' . $about->ceo_image));
        }

        $about->delete();
        return redirect()->route('admin.about.index')->with('success', 'About section deleted successfully.');
    }
}
