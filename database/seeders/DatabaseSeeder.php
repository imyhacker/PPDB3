<?php

namespace Database\Seeders;

use App\Models\Gelombang;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Gelombang::create([
            'gelombang'=>'Gelombang 1',
            'status' => '0',
            'slug_gelombang' => Str::slug('Gelombang_1')
        ]);
    }
}
