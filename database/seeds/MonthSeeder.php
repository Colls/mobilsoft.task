<?php

use Illuminate\Database\Seeder;
use App\Month;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('month')->delete();
        Month::create([
            'title' => 'Январь'
        ]);
        Month::create([
            'title' => 'Февраль'
        ]);
        Month::create([
            'title' => 'Март'
        ]);
        Month::create([
            'title' => 'Апрель'
        ]);
        Month::create([
            'title' => 'Май'
        ]);
        Month::create([
            'title' => 'Июнь'
        ]);
        Month::create([
            'title' => 'Июль'
        ]);
        Month::create([
            'title' => 'Август'
        ]);
        Month::create([
            'title' => 'Сентябрь'
        ]);
        Month::create([
            'title' => 'Октябрь'
        ]);
        Month::create([
            'title' => 'Ноябрь'
        ]);
        Month::create([
            'title' => 'Декабрь'
        ]);

    }
}
