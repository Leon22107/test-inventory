<?php

namespace Database\Seeders;

use App\Models\Item_Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item_Stock::create([
            "item_id" => 1,
            "qty" => 100,
            "unit_price" => 200000,
            "vendor_id" =>1,
        ]);
    }
}
