<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class TestimonialViewController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();

        return view('visitors.testimonials.index', compact('testimonials'));
    }
}