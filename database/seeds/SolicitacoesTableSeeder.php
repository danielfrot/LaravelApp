<?php

use App\Solicitacao;
use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class SolicitacoesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('solicitacoes')->delete();

        $faker = Faker::create();

        foreach(range(1, 30) as $i){
            $solicitacoes = [
                
                ['descricao' => $faker->sentence(), 'tipo'  => $faker->word()]
            ];
            DB::table('solicitacoes')->insert($solicitacoes);
        }
        
        

        
    }
}
