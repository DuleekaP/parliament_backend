<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ParliamentSession;

class ParliamentSessionsSeeder extends Seeder
{
    public function run()
    {
        ParliamentSession::create(['name' => '1st Parliament of Ceylon', 'start_date' => '1947-10-14', 'end_date' => '1952-04-08']);
        ParliamentSession::create(['name' => '2nd Parliament of Ceylon', 'start_date' => '1952-06-09', 'end_date' => '1956-04-08']);
        ParliamentSession::create(['name' => '3rd Parliament of Ceylon', 'start_date' => '1956-04-19', 'end_date' => '1960-12-05']);
        ParliamentSession::create(['name' => '4th Parliament of Ceylon', 'start_date' => '1960-12-05', 'end_date' => '1964-12-17']);
        ParliamentSession::create(['name' => '5th Parliament of Ceylon', 'start_date' => '1965-04-05', 'end_date' => '1970-05-25']);
        ParliamentSession::create(['name' => '6th Parliament of Ceylon', 'start_date' => '1970-06-07', 'end_date' => '1972-02-02']);
        ParliamentSession::create(['name' => 'National State Assembly', 'start_date' => '1972-05-22', 'end_date' => '1977-09-07']);
        ParliamentSession::create(['name' => '1st Parliament of Sri Lanka', 'start_date' => '1977-10-04', 'end_date' => '1989-12-20']);
        ParliamentSession::create(['name' => '2nd Parliament of Sri Lanka', 'start_date' => '1989-12-20', 'end_date' => '1994-06-24']);
        ParliamentSession::create(['name' => '3rd Parliament of Sri Lanka', 'start_date' => '1994-06-25', 'end_date' => '2000-08-18']);
        ParliamentSession::create(['name' => '4th Parliament of Sri Lanka', 'start_date' => '2000-08-18', 'end_date' => '2001-10-10']);
        ParliamentSession::create(['name' => '5th Parliament of Sri Lanka', 'start_date' => '2001-12-18', 'end_date' => '2004-04-07']);
        ParliamentSession::create(['name' => '6th Parliament of Sri Lanka', 'start_date' => '2004-04-22', 'end_date' => '2010-04-08']);
        ParliamentSession::create(['name' => '7th Parliament of Sri Lanka', 'start_date' => '2010-04-22', 'end_date' => '2015-06-26']);
        ParliamentSession::create(['name' => '8th Parliament of Sri Lanka', 'start_date' => '2015-09-01', 'end_date' => '2020-03-02']);
        ParliamentSession::create(['name' => '9th Parliament of Sri Lanka', 'start_date' => '2020-08-20', 'end_date' => '2024-11-20']);
        ParliamentSession::create(['name' => '10th Parliament of Sri Lanka', 'start_date' => '2024-11-21', 'end_date' => null]);

    }
}
