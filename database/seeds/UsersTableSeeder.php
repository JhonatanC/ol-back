<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jhonatan',
            'last_name' => 'C Hurtado',
            'dni' => 144258964,
            'rol_id' => 1,
            'status_id' => 1,
            'phone' => 3046023280,
            'email' => 'jdev@gmail.com',
            'password' => bcrypt('secret')
        ]);

        factory(User::class, 99)->create();
    }
}
