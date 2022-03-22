<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListkategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listkategori')->insert([
            'kategori' => 'Fantasy',
            'file' => 'fantasy'
        ]) ;
    }
}
