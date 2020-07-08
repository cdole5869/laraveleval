<?php

use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            [
                'specie_id' => '1',
                'name' => 'bob',
                'age' => '5',
                'description' => 'big dog',
                'sexe' => 'male',
                'weight' => '20 kg',
                'created_at' => date ('Y-m-d H:i:s'),
                'updated_at' => date ('Y-m-d H:i:s')
            ],

            [
                'specie_id' => '2',
                'name' => 'cathy',
                'age' => '6',
                'description' => 'sweet cat',
                'sexe' => 'female',
                'weight' => '8 kg',
                'created_at' => date ('Y-m-d H:i:s'),
                'updated_at' => date ('Y-m-d H:i:s')
            ]
        ]);
    }
}
