<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Models\Nationalitie;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nationalities')->delete();


            
            
        $nationals = ['Zimbabwean', 'Zambian', 'Yemeni'];

        foreach ($nationals as $n) {
            Nationalitie::create(['Name' => $n]);
        }
    }
}
