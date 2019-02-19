<?php

namespace App\Http\Controllers;

use App\property;
use App\property_type;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // response()->json(property::all(),200);
        $propertyType = property_type::table('category_sub_category')
             ->groupBy('category')
             ->get();
         return view('user/pages/property')->with('property_type', $propertyType);
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
        $property =property::create([
            'user_id' =>Auth::id(),
            'address' =>$request->address,
            'lga' =>$request->lga,
            'property_for' =>$request->property_for,
            'status' =>$request->status,
            'description' =>$request->description,
        ]);

        return response()->json([
            'status' => (bool) $property,
            'data' => $property,
            'message' => $property ? 'Property Created!' : 'Error Creating Property'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(property $property)
    {
        return response()->json($property, 200);
    }

    public function uploadFile(Request $request)
    {
        if($request->hasFile('image_link')){
            $name = time()."_".$request->file('image_link')->getClientOriginalName();
            $request->file('image_link')->move(public_path('images'),$name
        );
        }
        return response()->json(asset("images/$name"), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(property $property)
    {
        $status = $property->edit();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Property Edited!' : 'Error Editing Property'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(property $property)
    {
        $status = $property->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Property Deleted!' : 'Error Deleing Product'
        ]);
    }
}
