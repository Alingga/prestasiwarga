<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert("INSERT INTO kelurahans (id, nama_kelurahan, created_at, updated_at, deleted_at) VALUES
        	(11, 'Lamaru', NULL, NULL, NULL),
        	(12, 'Manggar', NULL, NULL, NULL),
        	(13, 'Manggar Baru', NULL, NULL, NULL),
        	(14, 'Teritip', NULL, NULL, NULL),
        	(15, 'Baru Ilir', NULL, NULL, NULL),
        	(16, 'Baru Tengah', NULL, NULL, NULL),
        	(17, 'Baru Ulu', NULL, NULL, NULL),
        	(18, 'Kariangau', NULL, NULL, NULL),
        	(19, 'Margasari', NULL, NULL, NULL),
        	(20, 'Margomulyo', NULL, NULL, NULL),
        	(21, 'Batu Ampar', NULL, NULL, NULL), 
        	(22, 'Garaha Indah', NULL, NULL, NULL),
        	(23, 'Gunung Samarinda', NULL, NULL, NULL),
        	(24, 'Gunung Samarinda Baru', NULL, NULL, NULL),
        	(25, 'Karang Joang', NULL, NULL, NULL),
        	(26, 'Muara Rapak', NULL, NULL, NULL),
        	(27, 'Gunung Sari Ilir', NULL, NULL, NULL),
        	(28, 'Gunung Sari Ulu', NULL, NULL, NULL),
        	(29, 'Karang Jati', NULL, NULL, NULL),
        	(30, 'Karang Rejo', NULL, NULL, NULL),
        	(31, 'Mekar Sari', NULL, NULL, NULL),
        	(32, 'Sumber Rejo', NULL, NULL, NULL),
        	(33, 'Damai Bahagia', NULL, NULL, NULL),
        	(34, 'Damai Baru', NULL, NULL, NULL),
        	(35, 'Gunung Bahagia', NULL, NULL, NULL),
        	(36, 'Sepinggan', NULL, NULL, NULL),
        	(37, 'Sepinggan Baru', NULL, NULL, NULL),
        	(38, 'Sepinggan Raya', NULL, NULL, NULL),
        	(39, 'Sungai Nangka', NULL, NULL, NULL),
        	(40, 'Damai', NULL, NULL, NULL),
        	(41, 'Kelandasan Ilir', NULL, NULL, NULL),
        	(42, 'Kelandasan Ulu', NULL, NULL, NULL),
        	(43, 'Prapatan', NULL, NULL, NULL),
        	(44, 'Telagasari', NULL, NULL, NULL)");

    }
}
