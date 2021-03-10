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
            'descricao' => 'Tamanho (P,M,G) - cores vermelho e azul',
            'imagem' => 'https://picsum.photos/id/237/200/300'
        ]);

        Produto::create([
            'titulo' => 'Bike',
            'descricao' => 'Bike para passeio estilo mountain bike',
            'imagem' => 'https://picsum.photos/id/1000/200/300'
        ]);

        Produto::create([
            'titulo' => 'Calça infantil',
            'descricao' => 'Tamanho (P,M,G) - cores verde e amarelo',
            'imagem' => 'https://picsum.photos/id/300/200/300'
        ]);
    }
}
