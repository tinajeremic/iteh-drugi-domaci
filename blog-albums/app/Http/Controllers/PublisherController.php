<?php

namespace App\Http\Controllers;

use App\Http\Resources\PublisherResource;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publishers = Publisher::all();
        return PublisherResource::collection($publishers);
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
        $publisher = Publisher::create([
            'name' => $request->name,  
            'PIB' => $request->PIB,                 
        ]);

        return new PublisherResource($publisher);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function show(Publisher $publisher_id)
    {
        //
        // $publisher = Publisher::find($publisher_id);
        // if (is_null($publisher)) {
        //     return response()->json('Data not found!', 404);
        // }
        // return response()->json($publisher);
        return new PublisherResource($publisher_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function edit(Publisher $publisher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publisher $publisher_id)
    {
        $publisher_id->update([
            'name' => $request->name,  
            'PIB' => $request->PIB,                 
        ]);

        return new PublisherResource($publisher_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publisher $publisher_id)
    {
        return $publisher_id->delete();
        return response()->json('Publisher deleted successfully.');
    }
}
