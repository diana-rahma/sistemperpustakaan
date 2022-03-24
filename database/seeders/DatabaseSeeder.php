<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Kategori;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            Kategori::factory(10)->create();

        /* DB::table('kategoris')->insert([
            'kategori' => Str::random(10),
            'file' => Str::random(10).'.jpg',
        ]) ; */
    }
}
