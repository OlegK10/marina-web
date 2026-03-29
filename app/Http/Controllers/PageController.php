<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use App\Models\Product;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Show the home page with featured products, courses, services, and testimonials.
     */
    public function home(): View
    {
        $featuredProducts = Product::active()->featured()->orderBy('sort_order')->get();
        $featuredCourses = Course::active()->featured()->orderBy('sort_order')->get();
        $featuredServices = Service::active()->featured()->orderBy('sort_order')->get();
        $testimonials = Testimonial::featured()->orderBy('sort_order')->get();

        return view('home', compact(
            'featuredProducts',
            'featuredCourses',
            'featuredServices',
            'testimonials',
        ));
    }

    /**
     * Show the about page.
     */
    public function about(): View
    {
        return view('about');
    }

    /**
     * Show the contact page.
     */
    public function contact(): View
    {
        return view('contact');
    }

    /**
     * Validate and store the contact form submission.
     */
    public function contactSubmit(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
