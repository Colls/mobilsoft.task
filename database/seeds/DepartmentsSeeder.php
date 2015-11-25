<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->delete();
        Department::create([
            'title' => 'Администрация'
        ]);
        Department::create([
            'title' => 'Отдел 1'
        ]);
        Department::create([
            'title' => 'Отдел 2'
        ]);
        Department::create([
            'title' => 'Отдел 3'
        ]);
    }
}
