<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    // Verifica se o user já existe no banco de dados

    if(!User::where('email', 'teste@teste.com')->first()){
        //Cadastrar usuário
   
        User::create([
            'id' => 1,    
            'name' => 'Usuário Teste',
            'email' => 'teste@teste.com',
            'password' => Hash::make('12345'),
            ]);
        }
    }
}
