<?php

namespace App\Http\Controllers;

use App\property_type;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // response()->json(Property_Type::all(),200);
        $propertyType = property_type::all('category', 'sub_category')
             ->groupBy('category')
             ->get();
         return view('user/pages/property')->with('propertyType', $propertyType);


    }


    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = property_type::find('category_sub_category')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = $property_type->edit();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Property_type Edit!' : 'Error Editing Property_type'
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
        // Log::info($request->all());

        $propertyType = new property_type;
       $propertyType->category = $request->category;
       $propertyType->sub_category = $request->sub_category;

       $propertyType->save();
       session()->flash('success_message'," Category created");
        return redirect('/property');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\property_type  $property_type
     * @return \Illuminate\Http\Response
     */
    public function show(property_type $property_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\property_type  $property_type
     * @return \Illuminate\Http\Response
     */
    public function edit(property_type $property_type)
    {
        $status = $property_type->edit();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Property_type Edited!' : 'Error Editing Property_type'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\property_type  $property_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, property_type $property_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\property_type  $property_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(property_type $property_type)
    {
        //
    }
}
