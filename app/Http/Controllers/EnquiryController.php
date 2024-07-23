<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'fullName' => 'required|string',
            'email' => 'required|email',
            'contactNumber' => 'required|string',
            'msg' => 'required|string',
        ]);

        // Store the enquiry
        Enquiry::create($validatedData);

        return response()->json(['message' => 'Enquiry submitted successfully'], 200);
    }
}
