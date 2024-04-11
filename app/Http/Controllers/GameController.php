<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return "index metoda";
		$games=Game::all();
		return response()->json($games);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //1nd way
		/*
		$game=new Game;
		$game->name = $request->name;
		$game->price = $request->price;
		$game->description = $request->description;
		$game->save();

		return response()->json([
				"message" => "New Game Added"
			],201);

		*/

		//2nd way

		$game = Game::create($request->all());
        return response()->json([
			'message' => 'Game created successfully',
			'game' => $game
			]);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
		$game=Game::find($id);
        if (!empty($game)){
			return response()->json($game);
		} else {
			return response()->json([
				"message" => "Game not found"
			],404);
		}

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
		//$game = Game::find($id);
        //$game->update($request->all());
        //return response()->json($game, 200);

		$validatedData = $request->validate([
			'name' => 'required',
			'description' => 'required',
			'price' => 'required',
		]);

		$game = Game::findOrFail($id);
		$game->update($validatedData);

		return response()->json([
			'message' => 'Game updated successfully',
			'game' => $game
			]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

		try {
			$game = Game::findOrFail($id);
			$game->delete();
			return response()->json(['message' => 'Game deleted successfully']);
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
