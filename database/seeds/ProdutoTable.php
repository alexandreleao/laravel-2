<?php

use Illuminate\Database\Seeder;
use App\Produto;

class ProdutoTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'titulo' => 'Saia de criança',
            'descricao' => 'Tamanho (P,M,G) - cores vermelho e azul'
        ]);

        Produto::create([
            'titulo' => 'Bike',
            'descricao' => 'Bike para passeio estilo mountain bike'
        ]);

        Produto::create([
            'titulo' => 'Calça infantil',
            'descricao' => 'Tamanho (P,M,G) - cores verde e amarelo'
        ]);
    }
}
