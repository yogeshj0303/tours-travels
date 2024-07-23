<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    //
    public function submit(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone_no' => 'required|string',
        'subject' => 'required|string',
        'query' => 'required|string',
    ]);

    // Store the data in the database
    Contact::create($request->all());

    return response()->json(['message' => 'Form submitted successfully']);
}
}
