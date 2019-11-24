<?php

use Illuminate\Database\Seeder;

class LicencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('licences')->insert([
            'name' => 'Word-Licence',
            'software' => 'Word',
            'duration'=> '50'
        ]);
        DB::table('licences')->insert([
            'name' => 'Adobe-Licence',
            'software' => 'Adobe',
            'duration'=> '90'
        ]);
        DB::table('licences')->insert([
            'name' => 'Android-Licence',
            'software' => 'Android',
            'duration'=> '60'
        ]);
        DB::table('licences')->insert([
            'name' => 'IOS-Licence',
            'software' => 'IOS',
            'duration'=> '150'
        ]);
    }
}
