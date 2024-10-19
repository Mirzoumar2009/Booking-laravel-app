<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Table;


class TablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Table::create(['seats' => 2, 'status' => 'available']);
        Table::create(['seats' => 4, 'status' => 'available']);
        Table::create(['seats' => 6, 'status' => 'reserved']);
    }
}
