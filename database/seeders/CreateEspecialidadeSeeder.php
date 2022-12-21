<?php

namespace Database\Seeders;

use App\Models\Especialidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateEspecialidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //criar especialidades
        $especialidades = [
            [
                'name'=>'Desenvolvedor',
            ],
            [
                'name'=>'Designer',
            ],
            [
                'name'=>'Analista',
            ],
            [
                'name'=>'Gerente',
            ],
            [
                'name'=>'Outros',
            ],
        ];

        foreach ($especialidades as $key => $especialidade) {
            Especialidade::create($especialidade);
        }
    }
}
