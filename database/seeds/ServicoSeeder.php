<?php

use Illuminate\Database\Seeder;
use App\Servico;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Servico::create([
            'tipo' => 'Portão Automático',
            'descricao' => 'Portão com motor de alta velocidade',
            'imagem' => 'https://https://www.google.com/search?q=tipos+de+vidros+para+janelas&sxsrf=ALeKk012QfN26mlitcEFREnFRxYwokCyLA:1615588062434&tbm=isch&source=iu&ictx=1&fir=WojwM0IpOBjRiM%252CHejRCTkKp5pTcM%252C_&vet=1&usg=AI4_-kT9F6VZjyakYLkzBan0iKvAm2vEQA&sa=X&ved=2ahUKEwju2MHE5qvvAhVCA9QKHTdHDb8Q9QF6BAgSEAE#imgrc=WojwM0IpOBjRiM&imgdii=CYnSEr3c_7aY8M'
        ]);

        Servico::create([
            'tipo' => 'Janela de Vidro',
            'descricao' => 'Vidro Transparente',
            'imagem' => 'https://https://www.google.com/search?q=tipos+de+vidros+para+janelas&sxsrf=ALeKk012QfN26mlitcEFREnFRxYwokCyLA:1615588062434&tbm=isch&source=iu&ictx=1&fir=WojwM0IpOBjRiM%252CHejRCTkKp5pTcM%252C_&vet=1&usg=AI4_-kT9F6VZjyakYLkzBan0iKvAm2vEQA&sa=X&ved=2ahUKEwju2MHE5qvvAhVCA9QKHTdHDb8Q9QF6BAgSEAE#imgrc=WojwM0IpOBjRiM&imgdii=CYnSEr3c_7aY8M'
        ]);

        Servico::create([
            'tipo' => 'Box para Banheiro',
            'descricao' => 'Vidro impresso ou fantasia',
            'imagem' => 'https://https://viminas.com.br/blog/conheca-os-tipos-de-vidro-para-box-de-banheiro#:~:text=Para%20o%20seu%20box%20de,a%20decora%C3%A7%C3%A3o%20do%20seu%20banheiro!'
        ]);
        
    }
}
