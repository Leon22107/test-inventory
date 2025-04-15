<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            "name" => "Aluminum ALoy",
            "sku" => "21K2JOIJOR8",
            "unit" => "Kg",
            "category_id" =>1,
        ]);
    }
}
