<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;

class FeatureController extends Controller
{
    /**
     * Display a listing of the features.
     */
    public function index()
    {
        $features = Feature::all();
        return view('admin.features.index', compact('features'));
    }

    public function indexOnepage()
    {
        $features = Feature::all();
        return view('partials.features', compact('features'));
    }

    /**
     * Show the form for creating a new feature.
     */
    public function create()
    {
        return view('admin.features.create');
    }

    /**
     * Store a newly created feature in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'icon'        => 'nullable|string',
        ]);

        Feature::create($request->all());

        return redirect()->route('features.index')->with('success', 'Feature added successfully!');
    }

    /**
     * Show the form for editing the specified feature.
     */
    public function edit(Feature $feature)
    {
        return view('admin.features.edit', compact('feature'));
    }

    /**
     * Update the specified feature in storage.
     */
    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'icon'        => 'nullable|string',
        ]);

        $feature->update($request->all());

        return redirect()->route('features.index')->with('success', 'Feature updated successfully!');
    }

    /**
     * Remove the specified feature from storage.
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('features.index')->with('success', 'Feature deleted successfully!');
    }
}
