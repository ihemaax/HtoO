<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
    public function switch(Request $request, string $locale): RedirectResponse
    {
        if (in_array($locale, ['ar', 'en'])) {
            session(['locale' => $locale]);
            $request->session()->put('locale', $locale);
            $request->session()->save();
        }

        return redirect()->route('home');
    }
}