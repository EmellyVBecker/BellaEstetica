<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert(["nome" => "Emelly", "curso" => "Engenharia de Computação", "turma" => "EC"]);
        DB::table('alunos')->insert(["nome" => "Maria", "curso" => "Engenharia de Automação", "turma" => "EA"]);
        DB::table('alunos')->insert(["nome" => "João", "curso" => "Engenharia de Software", "turma" => "ES"]);

        /*
        DB::table('cursos') -> insert (["nome" => "Engenharia de Computação", "abreviatura" => "EC"]);
        DB::table('cursos') -> insert (["nome" => "Engenharia de Automação", "abreviatura" => "EA"]);
        DB::table('cursos') -> insert (["nome" => "Engenharia de Software", "abreviatura" => "ES"]);
        */
    }
}
