<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('members')->insert([
            ['name' => 'MP A. Pathirana', 'party' => 'United National Party (UNP)', 'civil_status' => 'Married', 'dob' => '2008-10-19', 'constituency' => 'Batticaloa District'],
            ['name' => 'MP B. Pathirana', 'party' => 'Sri Lanka Podujana Peramuna (SLPP)', 'civil_status' => 'Divorced', 'dob' => '1982-09-05', 'constituency' => 'Ratnapura District'],
        ]);
    }
}
