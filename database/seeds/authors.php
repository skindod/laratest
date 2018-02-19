<?php

use Illuminate\Database\Seeder;

class authors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'author' => 'Mike',
            'name' => str_random(12)
        ]);
        
        DB::table('authors')->insert([
            'author' => 'Johnathan',
            'name' => str_random(12)
        ]);
        
        DB::table('authors')->insert([
            'author' => 'Sarah',
            'name' => str_random(12)
        ]);
    }
}
