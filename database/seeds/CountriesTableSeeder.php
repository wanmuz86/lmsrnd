<?php

use Illuminate\Database\Seeder;
use App\Country;
class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Country::create([
        	'country_name'=>'Malaysia']);
        Country::create([
        	'country_name'=>'Indonesia']);
    }
}
