<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
             // insert data ke table notaris menggunakan Faker
    		DB::table('notaries')->insert([
    			'id_notaris' => $faker->postcode,
    			'nama_notaris' => $faker->name,
    			'alamat' => $faker->address,
                'no_tlp' => $faker->phoneNumber,
    			'jabatan' => $faker->jobTitle,

    		]);
 
    	}
 
 
    }
}
