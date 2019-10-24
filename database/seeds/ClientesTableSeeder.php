<?php

use App\Solicitacao;
use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class ClientesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('clientes')->delete();

        $faker = Faker::create();

        foreach(range(1, 30) as $i){
            $clientes = [[
                'nome'  => $faker->name(),
                'rg' => $faker->ean8(),
                'cpf' => $faker->ipv4(),
                'profissao' => $faker->jobTitle(),
                'estado_civil' => $faker->word(),
                'longradouro' => $faker->address(),
                'numero' => $faker->buildingNumber(),
                'bairro' => $faker->streetName(),
                
            
                'nacionalidade' => $faker->state(),
                'telefone' => $faker->tollFreePhoneNumber()
                ]];
            DB::table('clientes')->insert($clientes);
        }
        
        

        
    }
}
