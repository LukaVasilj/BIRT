<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productlines;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductlinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $productlines = Productlines::all()->makeHidden(['image']);
    return response()->json($productlines);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //1nd way
		/*
		$productline=new Productlines;
		$productline->name = $request->name;
		$productline->price = $request->price;
		$productline->description = $request->description;
		$productline->save();

		return response()->json([
				"message" => "New Productlines Added"
			],201);

		*/

		//2nd way

		$productline = Productlines::create($request->all());
        return response()->json([
			'message' => 'Productlines created successfully',
			'productline' => $productline
			]);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
		$productline=Productlines::find($id);
        if (!empty($productline)){
			return response()->json($productline);
		} else {
			return response()->json([
				"message" => "Productlines not found"
			],404);
		}

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
		//$productline = Productlines::find($id);
        //$productline->update($request->all());
        //return response()->json($productline, 200);

		$validatedData = $request->validate([

			'textDescription' => 'required',
			'htmlDescription' => 'required',

		]);

		$productline = Productlines::findOrFail($id);
		$productline->update($validatedData);

		return response()->json([
			'message' => 'Productlines updated successfully',
			'productline' => $productline
			]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

		try {
			$productline = Productlines::findOrFail($id);
			$productline->delete();
			return response()->json(['message' => 'Productlines deleted successfully']);
		}
		catch (ModelNotFoundException $e){

			return response([
				'status' => 'ERROR',
				'message' => '404 not found',
				'description' => $e->getMessage(),
				'code' => $e->getCode()
				], 404);
		}
    }
}
