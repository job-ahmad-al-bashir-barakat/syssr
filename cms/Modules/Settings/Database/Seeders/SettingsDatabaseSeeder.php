<?php

namespace Modules\Settings\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SettingsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // country/city from api
        // $this->call(CountryTableSeeder::class);
        // $this->call(CityTableSeeder::class);

        // country/city from db
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
    }
}
