<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Pricing;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexOnepage()
    {
        return view('onepage', [
            'about' => About::first(),
            'contact' => Contact::first(),
            'features' => Feature::all(),
            'pricingPlans' => Pricing::all(),
            'services' => Service::all()
        ]);
    }

}
