<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertChurchillQuotes();
        $this->insertStpierreQuotes();
        $this->insertSparrowQuotes();
        $this->insertHenleyQuotes();
        $this->insertEinsteinQuotes();
        $this->insertDowneyQuotes();
        $this->insertSenecaQuotes();
        $this->insertAureliusQuotes();
    }

    private function insertChurchillQuotes()
    {
        $author = \App\Author::where('name', 'Winston Churchill')->first();
        $author->quotes()->saveMany([
            new \App\Quote(['text' => 'If you\'re going through hell, keep going.']),
        ]);
    }

    private function insertStpierreQuotes()
    {
        $author = \App\Author::where('name', 'Georges St-Pierre')->first();
        $author->quotes()->saveMany([
            new \App\Quote(['text' => 'I trained myself to fight an army, so one guy will not defeat me.']),
        ]);
    }

    private function insertSparrowQuotes()
    {
        $author = \App\Author::where('name', 'Capt. Jack Sparrow')->first();
        $author->quotes()->saveMany([
            new \App\Quote(['text' => 'The problem is not the problem, the problem is your attitude about the problem.']),
            new \App\Quote(['text' => 'Not all treasure is silver and gold, mate.']),
        ]);
    }

    private function insertHenleyQuotes()
    {
        $author = \App\Author::where('name', 'William Ernest Henley')->first();
        $author->quotes()->saveMany([
            new \App\Quote(['text' => 'I am the master of my fate; The captain of my soul.']),
        ]);
    }

    private function insertEinsteinQuotes()
    {
        $author = \App\Author::where('name', 'Albert Einstein')->first();
        $author->quotes()->saveMany([
            new \App\Quote(['text' => 'A clever person solves a problem. A wise person avoids it.']),
            new \App\Quote(['text' => 'Try not to become a man of success, but rather try to become a man of value.']),
            new \App\Quote(['text' => 'In the middle of difficulty lies opportunity.']),
            new \App\Quote(['text' => 'Weakness of attitude becomes weakness of character.']),
            new \App\Quote(['text' => 'The only source of knowledge is experience.']),
            new \App\Quote(['text' => 'You never fail until you stop trying.']),
            new \App\Quote(['text' => 'Once we accept our limits, we go beyond them.']),
            new \App\Quote(['text' => 'If you want to live a happy life, tie it to a goal, not to people or things.']),
            new \App\Quote(['text' => 'Only those who attempt the absurd can achieve the impossible.']),
        ]);
    }

    private function insertDowneyQuotes()
    {
        $author = \App\Author::where('name', 'Robert Downey Jr.')->first();
        $author->quotes()->saveMany([
            new \App\Quote(['text' => 'Remember that just because you hit bottom doesn’t mean you have to stay there.']),
            new \App\Quote(['text' => 'There’s somewhere you’re suppoused to go, and if you get quiet enough, you’ll make it.']),
            new \App\Quote(['text' => 'The higher the stakes, the happier I am, the better I will be.']),
        ]);
    }

    private function insertSenecaQuotes()
    {
        $author = \App\Author::where('name', 'Lucius Annaeus Seneca')->first();
        $author->quotes()->saveMany([
            new \App\Quote(['text' => 'Luck is what happens when preparation meets opportunity.']),
            new \App\Quote(['text' => 'Difficulties strengthen the mind, as labor does the body.']),
            new \App\Quote(['text' => 'If a man knows not to which port he sails, no wind is favorable.']),
            new \App\Quote(['text' => 'It is not the man who has too little, but the man who craves more, that is poor.']),
            new \App\Quote(['text' => 'What need is there to weep over parts of life? The whole of it calls for tears.']),
            new \App\Quote(['text' => 'He suffers more than necessary, who suffers before it is necessary.']),
            new \App\Quote(['text' => 'Only time can heal what reason cannot.']),
            new \App\Quote(['text' => 'Most powerful is he who has himself in his own power.']),
            new \App\Quote(['text' => 'Fate leads the willing, and drags along the reluctant.']),
            new \App\Quote(['text' => 'Eyes will not see when the heart wishes them to be blind.']),
            new \App\Quote(['text' => 'A gem cannot be polished without friction, nor a man without trials.']),
        ]);
    }

    private function insertAureliusQuotes()
    {
        $author = \App\Author::where('name', 'Marcus Aurelius')->first();
        $author->quotes()->saveMany([
            new \App\Quote(['text' => 'Waste no more time arguing what a good man should be. Be One.']),
            new \App\Quote(['text' => 'Your task is to stand straight; not to be held straight.']),
            new \App\Quote(['text' => 'The true worth of a man is to be measured by the objects he pursues.']),
            new \App\Quote(['text' => 'Dwell on the beauty of life. Watch the stars, and see yourself running with them.']),
        ]);
    }
}
