<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlbumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

     public static $wrap = 'album';
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'genre' => $this->resource->genre,
            'artist' => $this->resource->artist,
            'description' => $this->resource->description,
            'tracklist' => $this->resource->tracklist,
            'publisher' => $this->resource->publisher,
            'user' => $this->resource->user
        ];
    }
}
