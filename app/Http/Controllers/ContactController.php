<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // TODO: Kirim email atau simpan ke database
        // Mail::to('rizaldipt20@gmail.com')->send(new ContactMail($validated));

        return back()->with('success', 'Thank you, ' . e($validated['name']) . '! Your message has been sent successfully. I will get back to you soon.');
    }
}
