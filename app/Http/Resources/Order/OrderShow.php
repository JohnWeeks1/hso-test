<?php

namespace App\Http\Resources\Order;

use App\Stage;
use App\Http\Resources\Stage\StageShow;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Product\ProductCollection;

class OrderShow extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'order_id' => $this->id,
            'account' => [
                'id' => $this->account->id,
                'name' => $this->account->name,
            ],
            'stage' => new StageShow($this->stage),
            'products' => new ProductCollection($this->products),
        ];
    }
}
