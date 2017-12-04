<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class QuoteCollection extends ResourceCollection
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
            'data' => $this->collection->map(function ($quote) use ($request) {
                    return (new QuoteResource($quote))->toArray($request);
                })
        ];
    }

    public function with($request)
    {
        return [
            'included' => $this->collection->pluck('author')->unique()->values()->map(function ($author) {
                    return new AuthorResource($author);
                }),
            'meta' => [
                'author' => 'Jim Merioles',
                'email' => 'jimwisleymerioles@gmail.com',
                'github' => 'https://github.com/jimmerioles',
                'twitter' => 'https://twitter.com/jimmerioles',
                'linkedin' => 'https://ph.linkedin.com/in/jimwisleymerioles',
                'message' => 'Thank you for checking out the source! :)'
            ]
        ];
    }

    public function withResponse($request, $response)
    {
        $response->header('Content-Type', 'application/vnd.api+json');
    }
}
