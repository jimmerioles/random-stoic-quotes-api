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
        DB::table('authors')->insert([
            'name' => 'Robert Downey Jr.',
            'image' => 'robertdowneyjr-m.jpg'
        ]);
        DB::table('quotes')->insert([
            'text' => 'Remember that just because you hit bottom doesn’t mean you have to stay there.',
            'author_id' => 1
        ]);

        DB::table('authors')->insert([
            'name' => 'Capt. Jack Sparrow',
            'image' => 'captjacksparrow-m.jpg'
        ]);
        DB::table('quotes')->insert([
            'text' => 'The problem is not the problem, the problem is your attitude about the problem.',
            'author_id' => 2
        ]);

        DB::table('authors')->insert([
            'name' => 'Georges St-Pierre',
            'image' => 'georgesstpierre-m.jpg'
        ]);
        DB::table('quotes')->insert([
            'text' => 'I trained myself to fight an army, so one guy will not defeat me.',
            'author_id' => 3
        ]);
    }
}
