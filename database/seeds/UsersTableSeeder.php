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
        //Llamado a la fabrica de usuarios
        factory(User::class)->times(10)->create();

        //Creo un usuario pre-establecido para las pruebas
        User::create([
            'first_name' => 'Edgar Armando',
            'last_name' => 'Herrera Pepe',
            'email' => 'eherrerapepe@gmail.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'type_user' => 'teacher'
        ]);
    }
}
