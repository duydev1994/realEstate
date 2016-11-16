<?php

use Illuminate\Database\Seeder;
use App\Models\Location\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert countries
        foreach ($this->countries() as $country) {
            Country::create([
                'name' => $country['name'],
                'code' => $country['code'],
                'status' => $country['status'],
            ]);
        }
    }

    /**
     * Get list of countries.
     *
     * @return array
     */
    private function countries()
    {
        return [
            ['name' => 'Việt Nam', 'code' => 'vi', 'status' => 'active']
        ];
    }
}
