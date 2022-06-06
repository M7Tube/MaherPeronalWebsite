<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::Create([
            'ar_name' => 'تجربة',
            'en_name' => 'test',
            'ar_desc' => 'وصف تجربة شيبشسبشسيب  ثصبسشيب ثشص  شسيب شصث شسيب',
            'en_desc' => 'fgsfdgdsfgdsfgkfjg;lkfg',
            'picture' => '1.png',
            'user_id' => 1,
        ]);
        Item::Create([
            'ar_name' => 'تجربة',
            'en_name' => 'test',
            'ar_desc' => 'وصف تجربة شيبشسبشسيب  ثصبسشيب ثشص  شسيب شصث شسيب',
            'en_desc' => 'fgsfdgdsfgdsfgkfjg;lkfg',
            'picture' => '3.png',
            'user_id' => 1,
        ]);
        Item::Create([
            'ar_name' => 'تجربة',
            'en_name' => 'test',
            'ar_desc' => 'وصف تجربة شيبشسبشسيب  ثصبسشيب ثشص  شسيب شصث شسيب',
            'en_desc' => 'fgsfdgdsfgdsfgkfjg;lkfg',
            'picture' => '5.png',
            'user_id' => 1,
        ]);
    }
}
