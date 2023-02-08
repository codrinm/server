<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlockDay\StoreBlockDayRequest;
use App\Models\BlockedDay;

class BlockDayController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BlockDay\StoreBlockDayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlockDayRequest $request)
    {
        return BlockedDay::create($request->validated());
    }
}
