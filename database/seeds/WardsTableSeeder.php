<?php

use Illuminate\Database\Seeder;
use App\Models\Location\Ward;
use Flynsarmy\CsvSeeder\CsvSeeder;

class WardsTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'wards';
        $this->filename = base_path().'/database/seeds/csvs/wards.csv';
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
