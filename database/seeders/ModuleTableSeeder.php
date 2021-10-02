<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create(
[
    'name'=>'Foulen',
    'email'=>'foulen@esprit.tn',
    'password'=>bcrypt('pass')
]
        );
        //
    }
}
