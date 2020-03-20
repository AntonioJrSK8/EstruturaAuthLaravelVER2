<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->state('admin')->create([
            'email'=>'jr.sistema@gmail.com'
        ]);

        factory(App\User::class, 3)->state('user')->create();
    }
}
