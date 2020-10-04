<?php

use App\Teman;
use Illuminate\Database\Seeder;

class TemanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teman::create([
            'nama' => 'Surya',
            'hobi' => 'Memancing',
        ]);
        Teman::create([
            'nama' => 'Cika',
            'hobi' => 'Berenang',
        ]);
    }
}
