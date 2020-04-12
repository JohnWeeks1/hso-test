<?php

namespace App\Http\Controllers\Api;

use App\Account;
use App\Http\Controllers\Controller;
use App\Http\Resources\Account\AccountShow;
use App\Http\Resources\Account\AccountCollection;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AccountCollection
     */
    public function index()
    {
        return new AccountCollection(Account::all());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return AccountShow
     */
    public function show(int $id)
    {
        return new AccountShow(Account::findOrFail($id));
    }
}
