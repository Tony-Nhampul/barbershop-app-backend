<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barbershop;
use App\Models\Service;
use Illuminate\Http\Request;

class BarbershopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barbershops = Barbershop::all();

        return response()->json($barbershops);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       /* $barbershopDetails = Barbershop::findOrFail($id);

        $services = Service::where('barbershop_id', $id)->get();
        $barbershopDetails->services = $services;*/

        $barbershopDetails = Barbershop::with('services')->findOrFail($id);

        return response()->json($barbershopDetails);

       
    }

    
    public function search(Request $request)
    {

        // Validate the search URL Parameter
        $request->validate([
            'search' => 'required|string|max:255',
        ]);

        // Retrieve the 'search' query parameter
        $param = $request->query('search');

        // Search the database with partial matching
        $searchedBarbershops = Barbershop::where('name', 'LIKE', "%$param%")->get();

        // Return the results as JSON
        return response()->json($searchedBarbershops);
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barbershop $barbershop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barbershop $barbershop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barbershop $barbershop)
    {
        //
    }
}
