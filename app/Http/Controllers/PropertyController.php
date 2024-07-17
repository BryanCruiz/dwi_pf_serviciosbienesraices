<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Property::latest()->paginate(3);

        return view('properties.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'property_image'  =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'property_name'         =>  'required',
            'property_description'         =>  'required',
            'category_id'      =>  'required'


        ]);


        $file_name = time() . '.' . request()->property_image->getClientOriginalExtension();

        request()->property_image->move(public_path('images'), $file_name);

        $property = new Property();

        $property->property_image = $file_name;
        $property->property_name = $request->property_name;
        $property->property_description = $request->property_description;
        $property->category_id = $request->category_id;

        $property->save();

        return redirect()->route('properties.index')->with('success', 'Propiedad agregada exitosamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        return view('properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view('properties.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        $request->validate([
            'property_image'  =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'property_name'         =>  'required',
            'property_description'         =>  'required',
            'category_id'      =>  'required'
         ]);


         $property_image = $request->hidden_property_image;

         if($request->property_image != '')
         {
             $property_image = time() . '.' . request()->property_image->getClientOriginalExtension();

             request()->property_image->move(public_path('images'), $property_image);
         }



        $property_ = Property::find($request->hidden_id);

        $property_->property_image = $property_image;
        $property_->property_name = $request->property_name;
        $property_->property_description = $request->property_description;
        $property_->category_id = $request->category_id;

        $property_->save();

        return redirect()->route('properties.index')->with('success', 'Propiedad actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();

        return redirect()->route('properties.index')->with('success', 'Property Data deleted successfully');
    }

    public function autocomplete(Request $request)
    {
        $search = $request->get('category_name');
        $result = Category::where('category_name', 'LIKE', '%'. $search. '%')->get();
        return response()->json($result);
    }
}
