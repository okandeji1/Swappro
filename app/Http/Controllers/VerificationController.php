<?php

namespace App\Http\Controllers;

use App\verification;
use Illuminate\Http\Request;

class VerificationController extends Controller
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
        $verification =Verification::create([
        'user_id' =>Auth::id(),
        'document_id' =>Auth::id(),
        'value' =>$request->value,
        'comment' =>$request->comment,
        'verify' =>$request->verify,
        ]);

        return response()->json([
            'status' => (bool) $verification,
            'data' => $verification,
            'message' => $verification ? 'Verified!' : 'Error Verification'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\verification  $verification
     * @return \Illuminate\Http\Response
     */
    public function show(verification $verification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\verification  $verification
     * @return \Illuminate\Http\Response
     */
    public function edit(verification $verification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\verification  $verification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, verification $verification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\verification  $verification
     * @return \Illuminate\Http\Response
     */
    public function destroy(verification $verification)
    {
        //
    }
}
