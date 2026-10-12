<?php

namespace App\Http\Controllers;

class IndustryController extends Controller
{
    public function show(string $slug)
    {
        abort_unless($slug === 'real-estate', 404);

        return view('pages.industries.real-estate', ['isHome' => false]);
    }
}
