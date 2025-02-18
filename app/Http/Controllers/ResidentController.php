<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Resident;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // show all residents

        $residents = Resident::paginate(5);

        return view('residents', ['residents' => $residents]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('add-resident');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'firstname' => ['required', 'min:2'],
            'middlename' => ['required', 'min:2'],
            'lastname' => ['required', 'min:2'],
            'age' => ['required', 'numeric', 'gt:18'],
            'sex' => ['required'],
            'address' => ['required'],
            'contactNumber' => ['required', 'min:11'],
            'incidentDate' => ['required', 'min:6'],
            'incidentTime' => ['required'],
            'admissionDate' => 'required', ['min:6'],
            'reportDate' => ['required'],
            'natureOfTheCrime' => ['required'],
            'caseStatus' => ['required'],
            'residentImage' => ['required', 'mimetypes:image/*'],

        ]);

        

        $resident = array_merge(
            $request->except('residentImage'), 
            ['residentImage' => asset('storage/'.$request->file('residentImage')->store('', 'public'))],
        );

        Resident::create($resident);


        return redirect()->route('residents');
     
    }

    /**
     * Display the specified resource.
     */
    public function show(Resident $resident)
    {

        // dd($resident);      

       return view('resident-information', compact('resident'));
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
