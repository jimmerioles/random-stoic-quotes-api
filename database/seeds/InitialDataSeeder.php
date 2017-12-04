<?php

use Illuminate\Database\Seeder;

class InitialDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
}
