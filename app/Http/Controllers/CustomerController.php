<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class CustomerController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|string|min:6',
            // Add any other validation rules as needed
        ]);

        // Create a new customer
        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            // Add any other fields as needed
        ]);

        // Return a response
        return response()->json(['message' => 'Customer created successfully', 'customer' => $customer], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        // Find the customer by email
        $customer = Customer::where('email', $credentials['email'])->first();
    
        // Verify if the customer exists and the password is correct
        if ($customer && Hash::check($credentials['password'], $customer->password)) {
            // Authentication successful
            // Store the customer ID in the session
            $request->session()->put('customer_id', $customer->id);
            
            return redirect()->intended('/'); // Redirect to the intended URL or default /dashboard
        }
    
        // Authentication failed
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    }

    public function frontLogout(Request $request)
    {
        // Clear any session data as needed
        $request->session()->forget('customer_id');
        
        // Redirect the user to the login page or any other page
        return redirect('/');
    }
}
