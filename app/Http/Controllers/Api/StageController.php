<?php

namespace App\Http\Controllers\Api;

use App\Stage;
use App\Http\Controllers\Controller;
use App\Http\Resources\Stage\StageShow;
use App\Http\Resources\Stage\StageCollection;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return StageCollection
     */
    public function index()
    {
        return new StageCollection(Stage::all());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return StageShow
     */
    public function show(int $id)
    {
        return new StageShow(Stage::findOrFail($id));
    }
}
