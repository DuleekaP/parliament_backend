<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ParliamentSession;
use App\Models\Party;

class PartyPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $p1 = Party::find(7);
        $parliament1 = ParliamentSession::find(8);

        $p1->parliaments()->attach($parliament1, ['member_count'=>70]);
    }
}
