<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        try {
            Mail::to('rizaldipt20@gmail.com')->send(new ContactMail($validated));

            Log::info('Contact form submission', [
                'name' => $validated['name'],
                'email' => $validated['email'],
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to send contact email: ' . $e->getMessage());

            return back()->with('error', 'Sorry, something went wrong. Please try again later.');
        }

        return back()->with('success', 'Thank you, ' . e($validated['name']) . '! Your message has been sent successfully. I will get back to you soon.');
    }
}
