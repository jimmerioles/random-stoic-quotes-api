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
        $this->actual();

        // act
        $response = $this->getJson('/api/v1/quotes');

        // assert
        $response->assertExactJson($this->expected());
    }

    private function actual() {
        $author = factory(\App\Author::class)
            ->create(['name' => 'Robert Downey Jr.', 'image' => url('storage/images', 'robertdowneyjr-m.jpg')]);
        factory(\App\Quote::class)
            ->create([
                'text' => 'Remember that just because you hit bottom doesn’t mean you have to stay there.',
                'author_id' => $author->id
            ]);

        $author = factory(\App\Author::class)
            ->create(['name' => 'Capt. Jack Sparrow', 'image' => url('storage/images', 'captjacksparrow-m.jpg')]);
        factory(\App\Quote::class)
            ->create([
                'text' => 'The problem is not the problem, the problem is your attitude about the problem.',
                'author_id' => $author->id
            ]);

        $author = factory(\App\Author::class)
            ->create(['name' => 'Georges St-Pierre', 'image' => url('storage/images', 'georgesstpierre-m.jpg')]);
        factory(\App\Quote::class)
            ->create([
                'text' => 'I trained myself to fight an army, so one guy will not defeat me.',
                'author_id' => $author->id
            ]);
    }

    private function expected()
    {
        return [
            'data' => [
                [
                    'type' => 'quote',
                    'id' => 1,
                    'attributes' => ['text' => 'Remember that just because you hit bottom doesn’t mean you have to stay there.'],
                    'relationships' => [
                        'author' => [
                            'data' => ['type' => 'author', 'id' => 1]
                        ]
                    ]
                ],
                [
                    'type' => 'quote',
                    'id' => 2,
                    'attributes' => ['text' => 'The problem is not the problem, the problem is your attitude about the problem.'],
                    'relationships' => [
                        'author' => [
                            'data' => ['type' => 'author', 'id' => 2]
                        ]
                    ]
                ],
                [
                    'type' => 'quote',
                    'id' => 3,
                    'attributes' => ['text' => 'I trained myself to fight an army, so one guy will not defeat me.'],
                    'relationships' => [
                        'author' => [
                            'data' => ['type' => 'author', 'id' => 3]
                        ]
                    ]
                ]
            ],
            'included' => [
                [
                    'type' => 'author',
                    'id' => 1,
                    'attributes' => [
                        'name' => 'Robert Downey Jr.',
                        'image' => url('storage/images', 'robertdowneyjr-m.jpg')
                    ]
                ],
                [
                    'type' => 'author',
                    'id' => 2,
                    'attributes' => [
                        'name' => 'Capt. Jack Sparrow',
                        'image' => url('storage/images', 'captjacksparrow-m.jpg')
                    ]
                ],
                [
                    'type' => 'author',
                    'id' => 3,
                    'attributes' => [
                        'name' => 'Georges St-Pierre',
                        'image' => url('storage/images', 'georgesstpierre-m.jpg')
                    ]
                ]
            ],
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
}
