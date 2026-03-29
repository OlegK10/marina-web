<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * List all active services.
     */
    public function index(): View
    {
        $services = Service::active()->orderBy('sort_order')->get();

        return view('services.index', compact('services'));
    }

    /**
     * Show a single service by slug.
     */
    public function show(string $slug): View
    {
        $service = Service::active()->where('slug', $slug)->firstOrFail();

        return view('services.show', compact('service'));
    }
}
