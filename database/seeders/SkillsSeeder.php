<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skills::Create([
            'en_name'=>'test',
            'ar_name'=>'تجربة',
            'percent'=>75,
        ]);
        Skills::Create([
            'en_name'=>'test2',
            'ar_name'=>'2تجربة',
            'percent'=>50,
        ]);
    }
}
