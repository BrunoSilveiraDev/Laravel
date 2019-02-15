<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        //cria um usuário para que não tenhamos que criar manualmente toda vez que fizermos um migrate:refresh --seed
        User::create([
            'name' => 'Bruno Silveira',
            'email' => 'brunosilvcarv@gmail.com',
            'password' => Hash::make(123)
        ]);
        $this->call(OrdersTableSeeder::class);
    }
}
