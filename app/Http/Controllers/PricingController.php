<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    // Display a list of pricing plans in AdminLTE
    public function index()
    {
        $pricingPlans = Pricing::all();
        return view('admin.pricing.index', compact('pricingPlans'));
    }

    public function indexOnepage()
    {
        $pricingPlans = Pricing::all();
        return view('partials.pricing', compact('pricingPlans'));
    }

    // Show the form to create a new pricing plan
    public function create()
    {
        return view('admin.pricing.create');
    }

    // Store a new pricing plan
    public function store(Request $request)
    {
        $validated = $request->validate([
            'plan_name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'features' => 'required|array',
        ]);

        $validated['features'] = json_encode($validated['features']); // Convert features to JSON

        Pricing::create($validated);

        return redirect()->route('pricing.index')->with('success', 'Pricing plan added successfully!');
    }

    // Show the form to edit a pricing plan
    public function edit($id)
    {
        $plan = Pricing::findOrFail($id);
        return view('admin.pricing.edit', compact('plan'));
    }

    // Update an existing pricing plan
    public function update(Request $request, $id)
    {
        $plan = Pricing::findOrFail($id);

        $validated = $request->validate([
            'plan_name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'features' => 'required|array',
        ]);

        $validated['features'] = json_encode($validated['features']); // Convert features to JSON

        $plan->update($validated);

        return redirect()->route('admin.pricing.index')->with('success', 'Pricing plan updated successfully!');
    }
}
