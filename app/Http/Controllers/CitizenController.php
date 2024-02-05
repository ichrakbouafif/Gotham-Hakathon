<?php

namespace App\Http\Controllers;
use App\Models\Citizen;

use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function create()
    {
        return view('pages.contact');
    }
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'phone' => 'required',
            'emergency' => 'required',
            'contact_category' => 'required',
            // Add other validation rules as needed
        ]);

        // Create a new citizen
        $citizen = Citizen::create($validatedData);

        // Redirect or do whatever you need
        return redirect('/home')->with('status', 'Your message is send successfully.');
        
        // Assuming you have a 'list_citizens' route for displaying the list of citizens
    }
    public function listCitizens()
    {
        $citizens = Citizen::all();

        return view('list_citizens', ['citizens' => $citizens]);
    }
}
