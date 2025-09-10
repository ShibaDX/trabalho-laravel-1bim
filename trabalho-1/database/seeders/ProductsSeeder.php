<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'nome' => 'Notebook Dell Inspiron 15',
                'categoria' => 'Computadores',
                'quantidade' => 10,
                'preco' => 3499.90,
            ],
            [
                'nome' => 'Monitor LG 24" Full HD',
                'categoria' => 'Periféricos',
                'quantidade' => 15,
                'preco' => 899.90,
            ],
            [
                'nome' => 'Teclado Mecânico Redragon',
                'categoria' => 'Acessórios',
                'quantidade' => 25,
                'preco' => 349.90,
            ],
            [
                'nome' => 'Mouse Gamer Logitech G502',
                'categoria' => 'Acessórios',
                'quantidade' => 30,
                'preco' => 279.90,
            ],
            [
                'nome' => 'SSD Kingston 480GB',
                'categoria' => 'Armazenamento',
                'quantidade' => 40,
                'preco' => 229.90,
            ],
            [
                'nome' => 'HD Seagate 1TB',
                'categoria' => 'Armazenamento',
                'quantidade' => 35,
                'preco' => 299.90,
            ],
            [
                'nome' => 'Memória RAM Corsair 8GB DDR4',
                'categoria' => 'Hardware',
                'quantidade' => 50,
                'preco' => 199.90,
            ],
            [
                'nome' => 'Placa de Vídeo RTX 3060 12GB',
                'categoria' => 'Hardware',
                'quantidade' => 5,
                'preco' => 2299.90,
            ],
            [
                'nome' => 'Fonte Corsair 650W 80 Plus',
                'categoria' => 'Hardware',
                'quantidade' => 20,
                'preco' => 499.90,
            ],
            [
                'nome' => 'Cadeira Gamer ThunderX3 TGC12',
                'categoria' => 'Móveis/Ergonomia',
                'quantidade' => 8,
                'preco' => 1199.90,
            ],
        ]);
    }
}
// comando para subir -> php artisan db:seed --class=ProductsSeeder