<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoplistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'productname' => 'Watermelon',
                'unitprice' => '50000',
                'stock' => 5,
                'draft'=> 0
            ],
            [
                'productname' => 'Pear',
                'unitprice' => '12000',
                'stock' => 10,
                'draft'=> 0
            ]
        ];
        DB::table('Shoplist')->insert($data);
    }
}
