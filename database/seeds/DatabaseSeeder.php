<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // factory(User::class,3)->create();
        factory(User::class)->create([
            'email'=>'info@chea.me',
            'name'=>'chea' 
        ]);

        factory(User::class)->create([
            'email'=>'admin@chea.me',
            'name'=>'Admin' 
        ]);

        factory(User::class)->create([
            'email'=>'user@chea.me',
            'name'=>'User' 
        ]);
    }
}
