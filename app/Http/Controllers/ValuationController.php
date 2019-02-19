<?php

namespace App\Http\Controllers;

use App\valuation;
use Illuminate\Http\Request;

class ValuationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $valuation =Valuation::create([
            'user_id' =>Auth::id(),
            'document_id' =>Auth::id(),
            'value' =>$request->value,
            'comment' =>$request->comment,
            'verify' =>$request->verify,
        ]);

        return response()->json([
            'status' => (bool) $valiation,
            'data' => $valuation,
            'message' => $valuation ? 'Verified!' : 'Error Verification'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\valuation  $valuation
     * @return \Illuminate\Http\Response
     */
    public function show(valuation $valuation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\valuation  $valuation
     * @return \Illuminate\Http\Response
     */
    public function edit(valuation $valuation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\valuation  $valuation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, valuation $valuation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\valuation  $valuation
     * @return \Illuminate\Http\Response
     */
    public function destroy(valuation $valuation)
    {
        //
    }
}
