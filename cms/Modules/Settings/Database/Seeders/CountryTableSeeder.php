<?php

namespace Modules\Settings\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $client = new \GuzzleHttp\Client();
        $request = $client->get("http://battuta.medunes.net/api/country/all/?key=e481242c7decd6cac3df72f42c499b60");
        $response = $request->getBody()->getContents();
        collect(json_decode($response, true))->each(function ($country, $index) {
            \DB::table('countries')->insert([
                'name' => $country['name'],
                'code' => $country['code']
            ]);
        });
    }
}
