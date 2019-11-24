<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('companies')->insert([
            'name' => 'Google',
            'OIB' => '6655455645'
        ]);
        DB::table('companies')->insert([
            'name' => 'Oracle',
            'OIB' => '88457698'
        ]);
        DB::table('companies')->insert([
            'name' => 'IBM',
            'OIB' => '879645522'
        ]);
        DB::table('companies')->insert([
            'name' => 'Microsoft',
            'OIB' => '942225679'
        ]);
    }
}
