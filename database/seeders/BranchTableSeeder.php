<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $B = [
            ['branchNo' => 'B005', 'bAddress' => '22 Deer Rd, London'],
            ['branchNo' => 'B003', 'bAddress' => '163 Main St, Glasgow'],
            ['branchNo' => 'B003', 'bAddress' => '163 Main St, Glasgow'],
            ['branchNo' => 'B007', 'bAddress' => '16 Argyll St, Aberdeen'],
            ['branchNo' => 'B003', 'bAddress' => '163 Main St, Glasgow'],
            ['branchNo' => 'B005', 'bAddress' => '22 Deer Rd, London'],

        ];
        DB::table('branchtable')->insert($B);
    }
}
