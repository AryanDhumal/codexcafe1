<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate inputs (optional, but recommended)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Since you don't want to store data, just redirect back with success message
        return redirect()->back()->with('success', 'Thanks for your feedback! We will surely look into it.');
    }
}
