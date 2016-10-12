<?php

namespace App\Domains\Supporters\Database\Seeders;

use App\Domains\Supporters\Entities\Supporters;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupportersSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supporters')->insert([
            'id' => 1,
            'name' => 'Douglas Zuqueto',
            'email' => 'douglas.zuqueto@gmail.com',
            'password' => bcrypt('admin'),
        ]);

//        factory(Supporters::class)->create();
    }
}