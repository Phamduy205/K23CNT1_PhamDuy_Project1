<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class pvd_quan_triTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pvdmatkhau = md5("0123456789");
        DB::table('pvd_quan_tri')->insert([
            'pvdtaikhoan'=>"phamduy2005@gmail.com",
            'pvdmatkhau'=>$pvdmatkhau,
            'pvdtrangthai'=>0
        ]);
        DB::table('pvd_quan_tri')->insert([
            'pvdtaikhoan'=>"0559442005",
            'pvdmatkhau'=>$pvdmatkhau,
            'pvdtrangthai'=>0
        ]);
    }
}
