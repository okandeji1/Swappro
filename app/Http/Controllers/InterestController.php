<?php

namespace App\Http\Controllers;

use App\interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(intrest::with(['property'])->get(), 200);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $interest = interest::create([
            'property_id' => $request->property_id,
            'user_id' => Auth::id(),
        ]);

        return response()->json([
            'status' => (bool) $interest,
            'data' => $interest,
            'message' => $interest ? 'Interest Created!' : 'Error Creating Interest'
        ]);
    }
   /**
     * Display the specified resource.
     *
     * @param  \App\interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function show(interest $interest)
    {
        return response()->json($interest, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function edit(interest $interest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, interest $interest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function destroy(interest $interest)
    {
        $status = $interest->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Interest Deleted!' : 'Error Deleing Property'
        ]);
    
    }
}
