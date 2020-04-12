<?php

namespace App\Http\Resources\Stage;

use App\Stage;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StageCollection extends ResourceCollection
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
            'data' => $this->collection->transform(function (Stage $stage) {
                return new StageShow($stage);
            })
        ];
    }
}
