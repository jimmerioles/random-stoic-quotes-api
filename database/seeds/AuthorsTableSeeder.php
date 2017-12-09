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
        DB::table('authors')->insert([
            'name' => 'Robert Downey Jr.',
            'image' => 'robertdowneyjr-m.jpg'
        ]);

        DB::table('authors')->insert([
            'name' => 'Winston Churchill',
            'image' => 'winstonchurchill-m.jpg'
        ]);

        DB::table('authors')->insert([
            'name' => 'Georges St-Pierre',
            'image' => 'georgesstpierre-m.jpg'
        ]);

        DB::table('authors')->insert([
            'name' => 'Capt. Jack Sparrow',
            'image' => 'captjacksparrow-m.jpg'
        ]);

        DB::table('authors')->insert([
            'name' => 'William Ernest Henley',
            'image' => 'williamernesthenley-m.jpg'
        ]);

        DB::table('authors')->insert([
            'name' => 'Albert Einstein',
            'image' => 'alberteinstein-m.jpg'
        ]);

        DB::table('authors')->insert([
            'name' => 'Lucius Annaeus Seneca',
            'image' => 'luciusannaeusseneca-m.jpg'
        ]);

        DB::table('authors')->insert([
            'name' => 'Marcus Aurelius',
            'image' => 'marcusaurelius-m.jpg'
        ]);
    }
}
