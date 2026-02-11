<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Estados;
use App\Models\DadosUsuarios;
use App\Models\Categorias;
use App\Models\Subcategorias;
use App\Models\Produtos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'role' => 'administrador',
            'phone_i' => '(55) 99999-9999',
        ]);

        User::create([
            'name' => 'Cliente',
            'email' => 'cliente@cliente.com',
            'password' => Hash::make('12345678'),
            'role' => 'cliente',
            'phone_i' => '(55) 99999-9999',
        ]);


        $estados = [
            ['uf' => 'AC', 'nome' => 'Acre'],
            ['uf' => 'AL', 'nome' => 'Alagoas'],
            ['uf' => 'AP', 'nome' => 'Amapá'],
            ['uf' => 'AM', 'nome' => 'Amazonas'],
            ['uf' => 'BA', 'nome' => 'Bahia'],
            ['uf' => 'CE', 'nome' => 'Ceará'],
            ['uf' => 'DF', 'nome' => 'Distrito Federal'],
            ['uf' => 'ES', 'nome' => 'Espírito Santo'],
            ['uf' => 'GO', 'nome' => 'Goiás'],
            ['uf' => 'MA', 'nome' => 'Maranhão'],
            ['uf' => 'MT', 'nome' => 'Mato Grosso'],
            ['uf' => 'MS', 'nome' => 'Mato Grosso do Sul'],
            ['uf' => 'MG', 'nome' => 'Minas Gerais'],
            ['uf' => 'PA', 'nome' => 'Pará'],
            ['uf' => 'PB', 'nome' => 'Paraíba'],
            ['uf' => 'PR', 'nome' => 'Paraná'],
            ['uf' => 'PE', 'nome' => 'Pernambuco'],
            ['uf' => 'PI', 'nome' => 'Piauí'],
            ['uf' => 'RJ', 'nome' => 'Rio de Janeiro'],
            ['uf' => 'RN', 'nome' => 'Rio Grande do Norte'],
            ['uf' => 'RS', 'nome' => 'Rio Grande do Sul'],
            ['uf' => 'RO', 'nome' => 'Rondônia'],
            ['uf' => 'RR', 'nome' => 'Roraima'],
            ['uf' => 'SC', 'nome' => 'Santa Catarina'],
            ['uf' => 'SP', 'nome' => 'São Paulo'],
            ['uf' => 'SE', 'nome' => 'Sergipe'],
            ['uf' => 'TO', 'nome' => 'Tocantins'],
        ];

        foreach ($estados as $estado) {
            Estados::updateOrCreate(
                ['uf' => $estado['uf']],
                ['nome' => $estado['nome']]
            );
        }

        DadosUsuarios::create([
            'id_usuario' => 2,
            'endereco_tipo' => 'Casa',
            'endereco_rua' => 'Rua A',
            'endereco_numero' => 10,
            'endereco_bairro' => 'Centro',
            'endereco_complemento' => 'Casa',
            'endereco_referencia' => 'Mercadão A',
            'endereco_cidade' => 'Cidade A',
            'endereco_cep' => '98000-000',
            'endereco_id_estado' => 21,
        ]);

        Categorias::create([
            'nome' => 'Categoria A',
        ]);

        Subcategorias::create([
            'nome' => 'Subcategoria A',
            'id_categoria' => 1,
        ]);

        Produtos::create([
            'nome' =>'Chinelo Top',
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            'valor' => 100.00,
            'estoque_disponivel' => 100,
            'id_subcategoria' => 1,
            'marca' => 'Genérica',
            'modelo' => 'Plus',
            'linha' => 'Prime',
            'cor' => 'Amarelo',
            'tamanho' => '44',
            'material' => 'Elastano',
            'data_fabricacao' => null,
            'data_vencimento'  => null,
            'genero' => 'Unissex',
            'idade' => 'Adulto',
            'conteudo_embalagem' => '1 Chinelo',
            'condicoes' => 'Novo',
            'tamanhos' => null,
            'peso' => '250',
            'desconto' => 0,
            'etiqueta' => '10305068',
            'ativo' => true,
        ]);
    }
}
