<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\Product;
use App\Models\ProductMaterial;
use Illuminate\Database\Seeder;

class InitialProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = Product::create(['product_name' => "Ko'ylak"]);
        $p2 = Product::create(['product_name' => "Shim"]);

        $m1 = Material::create(['name' => "Mato"]);
        $m2 = Material::create(['name' => "Tugma"]);
        $m3 = Material::create(['name' => "Ip"]);
        $m4 = Material::create(['name' => "Zamok"]);

        //  1 dona Ko’ylak ishlab chiqarish uchun
        ProductMaterial::insert([
            [
                'product_id' => $p1->id,
                'material_id' => $m1->id,
                'quantity' => 0.8, // 0.8 metr mato
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => $p1->id,
                'material_id' => $m2->id,
                'quantity' => 5, // 5 ta tugma
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => $p1->id,
                'material_id' => $m3->id,
                'quantity' => 10, // 10 metr ip
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);


        //  1 dona Shim ishlab chiqarish uchun
        ProductMaterial::insert([
            [
                'product_id' => $p2->id,
                'material_id' => $m1->id,
                'quantity' => 1.4, // 0.8 metr mato
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => $p2->id,
                'material_id' => $m3->id,
                'quantity' => 15, // 10 metr ip
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => $p2->id,
                'material_id' => $m4->id,
                'quantity' => 1, // 1 ta zamok
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
