<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Author::create([
            'name' => 'Robert Downey Jr.',
            'image' => 'robertdowneyjr-m.jpg'
        ]);

        \App\Author::create([
            'name' => 'Winston Churchill',
            'image' => 'winstonchurchill-m.jpg'
        ]);

        \App\Author::create([
            'name' => 'Georges St-Pierre',
            'image' => 'georgesstpierre-m.jpg'
        ]);

        \App\Author::create([
            'name' => 'Capt. Jack Sparrow',
            'image' => 'captjacksparrow-m.jpg'
        ]);

        \App\Author::create([
            'name' => 'William Ernest Henley',
            'image' => 'williamernesthenley-m.jpg'
        ]);

        \App\Author::create([
            'name' => 'Albert Einstein',
            'image' => 'alberteinstein-m.jpg'
        ]);

        \App\Author::create([
            'name' => 'Lucius Annaeus Seneca',
            'image' => 'luciusannaeusseneca-m.jpg'
        ]);

        \App\Author::create([
            'name' => 'Marcus Aurelius',
            'image' => 'marcusaurelius-m.jpg'
        ]);
    }
}
