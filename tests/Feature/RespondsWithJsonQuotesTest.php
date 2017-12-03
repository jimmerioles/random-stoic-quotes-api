<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RespondsWithJsonQuotesTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_respond_with_json_quotes()
    {
        // arrange
        factory(App\Quote::class)
            ->create(['text' => 'The problem is not the problem, the problem is your attitude about the problem.'])
            ->each(function ($q) {
                $q->author()->save(factory(App\Author::class)->make(['name' => 'Capt. Jack Sparrow']));
                $q->image()->save(factory(App\Image::class)->make(['filename' => 'captjacksparrow-m.jpg']));
            });
        factory(App\Quote::class)
            ->create(['text' => 'I trained myself to fight an army, so one guy will not defeat me.'])
            ->each(function ($q) {
                $q->author()->save(factory(App\Author::class)->make(['name' => 'Georges St-Pierre']));
                $q->image()->save(factory(App\Image::class)->make(['filename' => 'georgesstpierre-m.jpg']));
            });

        // act
        $response = $this->get('/api/v1/quotes');

        // assert
        $response->assertExactJson($this->expected());
    }

    public function expected()
    {
        return [
            'meta' => [
                'author' => 'Jim Merioles',
                'copyright' => '(c)2017 Jim Merioles',
                'github' => 'https://github.com/jimmerioles',
                'twitter' => 'https://twitter.com/jimmerioles',
                'linkedin' => 'https://ph.linkedin.com/in/jimwisleymerioles'
            ],
            'data' => [
                [
                    'type' => 'quotes',
                    'id' => 1,
                    'attributes' => ['text' => 'The problem is not the problem, the problem is your attitude about the problem.'],
                    'relationships' => [
                        'author' => [
                            'data' => ['type' => 'authors', 'id' => 1]
                        ],
                        'image' => [
                            'data' => ['type' => 'images', 'id' => 1]
                        ]
                    ]
                ],
                [
                    'type' => 'quotes',
                    'id' => 2,
                    'attributes' => ['text' => 'I trained myself to fight an army, so one guy will not defeat me.'],
                    'relationships' => [
                        'author' => [
                            'data' => ['type' => 'authors', 'id' => 2]
                        ],
                        'image' => [
                            'data' => ['type' => 'images', 'id' => 2]
                        ]
                    ]
                ]
            ],
            'included' => [
                [
                    'type' => 'authors',
                    'id' => 1,
                    'attributes' => ['name' => 'Capt. Jack Sparrow']
                ],
                [
                    'type' => 'images',
                    'id' => 1,
                    'attributes' => ['filename' => 'captjacksparrow-m.jpg']
                ],
                [
                    'type' => 'authors',
                    'id' => 2,
                    'attributes' => ['name' => 'Georges St-Pierre']
                ],
                [
                    'type' => 'images',
                    'id' => 2,
                    'attributes' => ['filename' => 'georgesstpierre-m.jpg']
                ],
            ]
        ];
    }
}
