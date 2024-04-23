<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GameController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/api/games",
     *     summary="Get a list of games",
     *     tags={"Games"},
     *     @SWG\Response(response=200, description="Successful operation"),
     *     @SWG\Response(response=400, description="Invalid request")
     * )
     */
    public function index()
    {
        // Logika za dohvat igara
    }

    /**
     * @SWG\Post(
     *     path="/api/games",
     *     summary="Create a new game",
     *     tags={"Games"},
     *     @SWG\Response(response=201, description="Game created successfully"),
     *     @SWG\Response(response=400, description="Invalid input")
     * )
     */
    public function store(Request $request)
    {
        // Logika za stvaranje nove igre
    }

    /**
     * @SWG\Get(
     *     path="/api/games/{id}",
     *     summary="Get a game by ID",
     *     tags={"Games"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         type="integer",
     *         required=true,
     *         description="ID of the game to retrieve"
     *     ),
     *     @SWG\Response(response=200, description="Successful operation"),
     *     @SWG\Response(response=404, description="Game not found")
     * )
     */
    public function show(string $id)
    {
        // Logika za dohvat igre po ID-u
    }

    /**
     * @SWG\Put(
     *     path="/api/games/{id}",
     *     summary="Update a game",
     *     tags={"Games"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         type="integer",
     *         required=true,
     *         description="ID of the game to update"
     *     ),
     *     @SWG\Response(response=200, description="Game updated successfully"),
     *     @SWG\Response(response=400, description="Invalid input"),
     *     @SWG\Response(response=404, description="Game not found")
     * )
     */
    public function update(Request $request, string $id)
    {
        // Logika za ažuriranje igre
    }

    /**
     * @SWG\Delete(
     *     path="/api/games/{id}",
     *     summary="Delete a game",
     *     tags={"Games"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         type="integer",
     *         required=true,
     *         description="ID of the game to delete"
     *     ),
     *     @SWG\Response(response=200, description="Game deleted successfully"),
     *     @SWG\Response(response=404, description="Game not found")
     * )
     */
    public function destroy(string $id)
    {
        // Logika za brisanje igre
    }
}
