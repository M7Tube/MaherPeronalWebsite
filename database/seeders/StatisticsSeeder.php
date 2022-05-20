<?php

namespace Database\Seeders;

use App\Models\Statistics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statistics::Create([
            'work_complated' => 11,
            'years_of_experience' => 3,
            'total_clients' => 222,
            'award_won' => 22,
        ]);
    }
}
