<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function contact()
    {
        return view('user.contact');
    }

    public function store(Request $request)
    {
        // Log the request data for debugging
        Log::info('Form data:', $request->all());

        // Validate the input data
        $validatedData = $request->validate([
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);

        try {
            // Store the validated data in the database
            $contact = Contact::create([
                'phone' => $validatedData['phone'],
                'message' => $validatedData['message'],
            ]);

            // Log the saved contact for debugging
            Log::info('Saved contact:', $contact->toArray());

            // Redirect back with a success message
            return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Log any errors for debugging
            Log::error('Error saving contact:', ['error' => $e->getMessage()]);

            // Redirect back with an error message
            return redirect()->route('contact')->with('error', 'There was an error sending your message.');
        }
    }
}
