<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
class CompaniesLicencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_licence')->insert([
            'company_id' => '1',
            'licence_id'=>'2',
            'date_create' => Carbon::parse('18-11-2019'),
            'date_update'=> Carbon::parse('20-11-2019'),
            'valid_until'=> Carbon::parse('16-02-2020'),
            'grace_period'=> Carbon::parse('18-02-2020'),
        ]);
        DB::table('company_licence')->insert([
            'company_id' => '1',
            'licence_id'=>'1',
            'date_create' => Carbon::parse('25-11-2019'),
            'date_update'=> Carbon::parse('29-11-2019'),
            'valid_until'=> Carbon::parse('14-01-2020'),
            'grace_period'=> Carbon::parse('18-01-2020'),
        ]);
        DB::table('company_licence')->insert([
            'company_id' => '2',
            'licence_id'=>'1',
            'date_create' => Carbon::parse('20-11-2019'),
            'date_update'=> Carbon::parse('27-11-2019'),
            'valid_until'=> Carbon::parse('09-01-2020'),
            'grace_period'=> Carbon::parse('14-01-2020'),
        ]);
        DB::table('company_licence')->insert([
            'company_id' => '3',
            'licence_id'=>'4',
            'date_create' => Carbon::parse('2-11-2019'),
            'date_update'=> Carbon::parse('9-11-2019'),
            'valid_until'=> Carbon::parse('31-03-2020'),
            'grace_period'=> Carbon::parse('4-04-2020'),
        ]);
    }
}
