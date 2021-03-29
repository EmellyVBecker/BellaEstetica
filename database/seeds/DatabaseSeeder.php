<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('clientes') -> insert (["nome" => "Emelly", "email" => "emelly@gmail.com", "cpf" => "025.125.789-69", "telefone" => "99925-6589"]);
        DB::table('clientes') -> insert (["nome" => "João", "email" => "joao@gmail.com", "cpf" => "027.256.025-89", "telefone" => "99936-5659"]);
        DB::table('clientes') -> insert (["nome" => "Davi", "email" => "davi@gmail.com", "cpf" => "520.512.488-00", "telefone" => "99847-1425"]);
        DB::table('clientes') -> insert (["nome" => "Jordan", "email" => "jordan@gmail.com", "cpf" => "036.236.890-70", "telefone" => "99259-0023"]);
    }
}
