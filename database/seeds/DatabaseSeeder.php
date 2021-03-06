<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('UserSeeder');
        $this->call('MonthSeeder');
        $this->call('DepartmentsSeeder');
        $this->call('SalarySeeder');
        $this->call('SubordinationSeeder');

        Model::reguard();
    }
}
