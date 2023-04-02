<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RealState;
use App\Http\Resources\RealStateResource;
use App\Http\Resources\RealStateShowResource;
use App\Http\Requests\StoreRealStateRequest;
use App\Http\Requests\UpdateRealStateRequest;

class RealStateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return RealStateResource::collection(RealState::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRealStateRequest $request)
    {
        // dd($request->all());
        return (new RealStateShowResource(RealState::create($request->all())))
        ->additional(['message' => 'Real State was saved successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(RealState $realstate)
    {
        return new RealStateShowResource($realstate);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRealStateRequest $request, RealState $realstate)
    {
        // dd($request->all());
        $realstate->update($request->all());

        return (new RealStateShowResource($realstate))
        ->additional(['message' => 'Real state updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RealState $realstate)
    {
        $realstate->delete();

        return (new RealStateShowResource($realstate))
        ->additional(['message' => 'Real state deleted successfully']);
    }
}
