<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Party;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Party::create(['name' => 'United National Party', 'started_date' => '1946-11-20']);
        Party::create(['name' => 'Sri Lanka Freedom Party', 'started_date' => '1951-09-02']);
        Party::create(['name' => 'Sri Lanka Podujana Peramuna', 'started_date' => '2016-11-14']);
        Party::create(['name' => 'Samagi Jana Balawegaya', 'started_date' => '2020-02-11']);
        Party::create(['name' => 'Jathika Jana Balawegaya', 'started_date' => '2019-03-28']);
        Party::create(['name' => 'Ilankai Tamil Arasu Kachchi', 'started_date' => '1949-12-18']);
        Party::create(['name' => 'Sri Lanka Muslim Congress', 'started_date' => '1981-09-25']);
        Party::create(['name' => 'All Ceylon Tamil Congress', 'started_date' => '1944-08-29']);
        Party::create(['name' => 'All Ceylon Makkal Congress', 'started_date' => '2004-03-10']);
        Party::create(['name' => 'Democratic Tamil National Alliance', 'started_date' => '2019-11-18']);
        Party::create(['name' => 'Janatha Vimukthi Peramuna', 'started_date' => '1965-03-21']);
        Party::create(['name' => 'Jathika Hela Urumaya', 'started_date' => '2004-12-24']);
        Party::create(['name' => 'Mahajana Eksath Peramuna', 'started_date' => '1956-01-10']);
        Party::create(['name' => 'Tamil National Alliance', 'started_date' => '2001-01-01']);
        Party::create(['name' => 'Eelam People`s Democratic Party', 'started_date' => '1984-04-04']);
        Party::create(['name' => 'Ceylon Workers` Congress', 'started_date' => '1939-05-05']);
        Party::create(['name' => 'Democratic Left Front', 'started_date' => '1945-10-10']);
        Party::create(['name' => 'Democratic People`s Front', 'started_date' => '2000-05-29']);
        Party::create(['name' => 'National Union of Workers', 'started_date' => '1965-03-31']);
        Party::create(['name' => 'Up-Country People`s Front', 'started_date' => '1989-04-21']);
        Party::create(['name' => 'Tamil Eelam Liberation Organization', 'started_date' => '1979-08-23']);
        Party::create(['name' => 'Tamil National People`s Front', 'started_date' => '1962-10-24']);
        Party::create(['name' => 'Sri Lanka Labour Party', 'started_date' => '1998-07-11']);
    }
}