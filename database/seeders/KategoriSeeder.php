<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert("INSERT INTO kategoris (id, kategori, created_at, updated_at, deleted_at) VALUES
        	(01, 'Akademik', NULL, NULL, NULL),
        	(02, 'Non Akademik', NULL, NULL, NULL)");
    }
}
