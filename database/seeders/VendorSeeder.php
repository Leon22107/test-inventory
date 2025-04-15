<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendor::create([
            "name" => "BT. AAA",
            "email" => "AAA@business.ac.id",
            "contact" => "021-22219219",
            "address" => "Jl. Jalanan 12, Nomor 2, Kota Adalah",
        ]);
    }
}
