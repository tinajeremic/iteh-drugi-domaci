<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlbumResource;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $albums = Album::all();
        return AlbumResource::collection($albums);
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
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:225',
            'description' => 'required',
            'tracklist' => 'required',
            'artist_id' => 'required',
            'genre_id' => 'required',
            'publisher_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $album = Album::create([
            'title' => $request->title,
            'description' => $request->description,
            'tracklist' => $request->tracklist,
            'artist_id' => $request->artist_id,
            'genre_id' => $request->genre_id,
            'publisher_id' => $request->publisher_id,
            'user_id' => Auth::user()->id
        ]);

        return new AlbumResource($album);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album_id)
    {
        //
        // $album = Album::find($album_id);
        // if (is_null($album)) {
        //     return response()->json('Data not found!', 404);
        // }
        // return response()->json($album);

        return new AlbumResource($album_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album_id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:225',
            'description' => 'required',
            'tracklist' => 'required',
            'artist_id' => 'required',
            'genre_id' => 'required',
            'publisher_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $album_id->update([
            'title' => $request->title,
            'description' => $request->description,
            'tracklist' => $request->tracklist,
            'artist_id' => $request->artist_id,
            'genre_id' => $request->genre_id,
            'publisher_id' => $request->publisher_id,
            'user_id' => request()->user_id
        ]);

        return new AlbumResource($album_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album_id)
    {
        return $album_id->delete();
        return response()->json('Album deleted successfully.');
    }
}
