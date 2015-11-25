<?php

use Illuminate\Database\Seeder;
use App\Subordination;

class SubordinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subordination')->delete();
        Subordination::create([
            'user_id' => '1',
            'department_id' => '1',
            'chief_id' => '0',
        ]);
        Subordination::create([
            'user_id' => '2',
            'department_id' => '2',
            'chief_id' => '1',
        ]);
        Subordination::create([
            'user_id' => '3',
            'department_id' => '3',
            'chief_id' => '1',
        ]);
        Subordination::create([
            'user_id' => '4',
            'department_id' => '2',
            'chief_id' => '2',
        ]);
        Subordination::create([
            'user_id' => '5',
            'department_id' => '2',
            'chief_id' => '2',
        ]);
        Subordination::create([
            'user_id' => '6',
            'department_id' => '2',
            'chief_id' => '2',
        ]);
        Subordination::create([
            'user_id' => '7',
            'department_id' => '2',
            'chief_id' => '2',
        ]);
        Subordination::create([
            'user_id' => '8',
            'department_id' => '3',
            'chief_id' => '3',
        ]);
    }
}
