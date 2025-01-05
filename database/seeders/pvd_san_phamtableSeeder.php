<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;
class pvd_san_phamtableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("pvd_san_pham")->insert([
            'pvdmasanpham'  => "PD007",
            'pvdtensanpham' => "laptop lenovo",
            'pvdhinhanh'    => "/images/PD006.jpg",
            'pvdsoluong'    => 200,
            'pvddongia'     => 30000,
            'pvdmaloai'     =>"VD002",
            'pvdtrangthai'  => 0
        ]);
    DB::table("users")->insert([
                'name' => 'Duy',
                'email'  => "duy123@gmail.com",
                'password' => Hash::make('123456'),
            ]);
}
}
