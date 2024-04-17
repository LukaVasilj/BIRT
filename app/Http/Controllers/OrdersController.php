<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Orders::all();
        return response()->json($orders);
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

		$order = Orders::create($request->all());
        return response()->json([
			'message' => 'Order created successfully',
			'order' => $order
			]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $orderNumber)
    {
        $order=Orders::find($orderNumber);
        if (!empty($order)){
			return response()->json($order);
		} else {
			return response()->json([
				"message" => "Order not found"
			],404);
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
    public function update(Request $request, string $orderNumber)
    {
        {
            //
            //$game = Game::find($id);
            //$game->update($request->all());
            //return response()->json($game, 200);

            $validatedData = $request->validate([
                'orderDate' => 'required',
                'requiredDate' => 'required',
                'shippedDate' => 'required',
                'status' => 'required',
                'comments' => 'required',
                'customerNumber' => 'required'
            ]);

            $order = Order::findOrFail($orderNumber);
            $order->update($validatedData);

            return response()->json([
                'message' => 'Order updated successfully',
                'order' => $order
                ]);

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $orderNumber)
    {

		try {
			$order = Orders::findOrFail($orderNumber);
			$order->delete();
			return response()->json(['message' => 'Order deleted successfully']);
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
