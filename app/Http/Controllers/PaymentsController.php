<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments=Payments::all();
        return response()->json($payments);
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

		$payment = Payments::create($request->all());
        return response()->json([
			'message' => 'Payment created successfully',
			'payment' => $payment
			]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $checkNumber)
    {
        $payment = Payments::where('checkNumber', $checkNumber)->first();

        if ($payment) {
            return response()->json($payment);
        } else {
            return response()->json([
                "message" => "Payment not found"
            ], 404);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $checkNumber)
    {
        {
            //
            //$game = Game::find($id);
            //$game->update($request->all());
            //return response()->json($game, 200);

            $validatedData = $request->validate([
                'customerNumber' => 'required',
                'paymentDate' => 'required',
                'amount' => 'required',

            ]);

            $payment = Payments::findOrFail($checkNumber);
            $payment->update($validatedData);

            return response()->json([
                'message' => 'Order updated successfully',
                'payment' => $payment
                ]);

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $checkNumber)
    {

		try {
			$payment = Payments::findOrFail($checkNumber);
			$payment->delete();
			return response()->json(['message' => 'Payment deleted successfully']);
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
