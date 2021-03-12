#Colocação de campo e atualização da tabela produto

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'imagem',
    ];
}

