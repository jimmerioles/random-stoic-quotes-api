<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class QuoteResource extends Resource
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
            'type' => 'quote',
            'id' => $this->id,
            'attributes' => [
                'text' => $this->text
            ],
            'relationships' => [
                'author' => [
                    'data' => [
                        'type' => 'author',
                        'id' => $this->author_id
                    ]
                ]
            ]
        ];
    }

    public function with($request)
    {
        return ['included' => [new AuthorResource($this->author)]];
    }
}
