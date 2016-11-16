<?php

use Illuminate\Database\Seeder;
use App\Models\Location\City;
use Flynsarmy\CsvSeeder\CsvSeeder;

class CitiesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table    = 'cities';
        $this->filename = base_path() . '/database/seeds/csvs/cities.csv';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        DB::table($this->table)->truncate();

        parent::run();
    }
}
