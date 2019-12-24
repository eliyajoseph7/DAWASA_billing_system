<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(KinondoniTableSeeder::class);
        factory(App\Kinondoni::class, 5000)->create()->each(function($kinondonis){
            $kinondonis->save();
            });

        factory(App\Ilala::class, 7000)->create()->each(function($ilalas){
            $ilalas->save();
            });

        factory(App\Temeke::class, 6500)->create()->each(function($temekes){
            $temekes->save();
            });

        factory(App\Kibaha::class, 3000)->create()->each(function($kibahas){
            $kibahas->save();
            });

        factory(App\Bagamoyo::class, 2800)->create()->each(function($bagamoyos){
            $bagamoyos->save();
            });
    }
}
