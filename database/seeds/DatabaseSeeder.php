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
        DB::table('alunos')->insert(["nome" => "João Leitão", "curso" => "Informática", "turma" => "INFO03"]);
        DB::table('alunos')->insert(["nome" => "Kiko", "curso" => "Alimentos", "turma" => "ALIO03"]);
        DB::table('alunos')->insert(["nome" => "Chaves", "curso" => "Mecânica", "turma" => "MECO03"]);

        DB::table('curso')->insert(["nome" => "Informática", "abreviatura" => "INFO03"]);
        DB::table('curso')->insert(["nome" => "Alimentos",  "abreviatura" => "ALIO03"]);
        DB::table('curso')->insert(["nome" => "Mecânica",  "abreviatura" => "MECO03"]);
    }
}
