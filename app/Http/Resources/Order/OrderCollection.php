<?php

namespace App\Http\Resources\Order;

use App\Order;
use Illuminate\Http\Resources\Json\ResourceCollection;

class OrderCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function (Order $order) {
                return [
                    'id' => $order->id,
                    'account_id' => $order->account_id,
                    'stage_id' => $order->stage_id,
                    'created_at' => $order->created_at,
                    'updated_at' => $order->updated_at,
                ];
            })
        ];
    }
}
