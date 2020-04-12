<?php

namespace App\Http\Controllers\Api;

use App\Order;
use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderStore;
use App\Http\Resources\Order\OrderShow;
use App\Http\Requests\Order\OrderUpdate;
use App\Http\Resources\Order\OrderCollection;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return OrderCollection
     */
    public function index()
    {
        return new OrderCollection(Order::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param OrderStore $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(OrderStore $request)
    {
        $order = new Order;

        $order->account_id = $request->get('account_id');
        $order->stage_id = $request->get('stage_id');
        $order->save();

        $order->products()->attach($request->get('product_id'));

        return response()->json([
            'success' => 'The order was created',
            'order' => new OrderShow($order)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return OrderShow
     */
    public function show(int $id)
    {
        return new OrderShow(Order::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param OrderUpdate $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(OrderUpdate $request, int $id)
    {
        $order = Order::findOrFail($id);

        $order->stage_id = $request->get('stage_id');
        $order->save();

        $order->products()->sync($request->get('product_id'));

        return response()->json([
            'success' => 'The order with the id of ' . $order->id . ' was updated',
            'order' => new OrderShow($order)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $id)
    {
        $order = Order::findOrFail($id);

        $order->delete();

        return response()->json([
            'success' => 'The order was deleted'
        ]);
    }
}
