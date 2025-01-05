<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class pvd_loai_san_phamtableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pvd_loai_san_pham')->insert([
            'pvdmaloai' => "D001",
            'pvdtenloai' => "Điện thoại Iphone 16 promax",
            'pvdtrangthai' =>0
        ]);
        DB::table('pvd_loai_san_pham')->insert([
            'pvdmaloai' => "D002",
            'pvdtenloai' => "Điện thoại Iphone 15 promax",
            'pvdtrangthai' =>0
        ]);
        DB::table('pvd_loai_san_pham')->insert([
            'pvdmaloai' => "D003",
            'pvdtenloai' => "Điện thoại Iphone 14 promax",
            'pvdtrangthai' =>0
        ]);
        DB::table('pvd_loai_san_pham')->insert([
            'pvdmaloai' => "D004",
            'pvdtenloai' => "Điện thoại Iphone 16",
            'pvdtrangthai' =>0
        ]);
        DB::table('pvd_loai_san_pham')->insert([
            'pvdmaloai' => "D005",
            'pvdtenloai' => "Điện thoại Iphone 15",
            'pvdtrangthai' =>0
        ]);
    }
}
