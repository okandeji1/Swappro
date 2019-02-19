<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        response()->json(UserProfile::all(),200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = $userProfile->create();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Profile Created!' : 'Error Creating Profile'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        $status = $userProfile->edit();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Profile Edited!' : 'Error Editing Profile'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        $status = $userProfile->update();
        $request->only([
            'user_id',
            'contact_id',
            'address_id',
            'fullname',
            'sex'
        ]);

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Profile Updated!' : 'Error Updated Profile'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        $status = $userProfile->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Profile Deleted!' : 'Error Deleting Profile'
        ]);
    }
}
