<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stages')->insert([
            'name'=>'مرحلة البناء'
        ]);
        DB::table('stages')->insert([
            'name'=>'مرحلة التنفيذ'
        ]);
        DB::table('stages')->insert([
            'name'=>'مرحلة التشغيل'
        ]);
    }
}
