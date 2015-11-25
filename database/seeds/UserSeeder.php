<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'name' => 'Имя 1',
            'sec_name' => 'Фамилия 1',
            'th_name' => 'Отчество 1',
            'position' => 'Директор',
            'code' => '11111',
            'email' => 'Director@director.com'
        ]);
        User::create([
            'name' => 'Имя 2',
            'sec_name' => 'Фамилия 2',
            'th_name' => 'Отчество 2',
            'position' => 'Начальник отдела IT',
            'code' => '22222',
            'email' => 'Chief@chief.com'
        ]);
        User::create([
            'name' => 'Имя 3',
            'sec_name' => 'Фамилия 3',
            'th_name' => 'Отчество 3',
            'position' => 'Главный бухгалтер',
            'code' => '33333',
            'email' => 'Chief_accountant@accountant.com'
        ]);
        User::create([
            'name' => 'Имя 4',
            'sec_name' => 'Фамилия 4',
            'th_name' => 'Отчество 4',
            'position' => 'Программист 1',
            'code' => '44444',
            'email' => 'Prog1@prog.com'
        ]);
        User::create([
            'name' => 'Имя 5',
            'sec_name' => 'Фамилия 5',
            'th_name' => 'Отчество 5',
            'position' => 'Программист 2',
            'code' => '55555',
            'email' => 'Prog2@prog.com'
        ]);
        User::create([
            'name' => 'Имя 6',
            'sec_name' => 'Фамилия 6',
            'th_name' => 'Отчество 6',
            'position' => 'Программист 3',
            'code' => '66666',
            'email' => 'Prog3@prog.com'
        ]);
        User::create([
            'name' => 'Имя 7',
            'sec_name' => 'Фамилия 7',
            'th_name' => 'Отчество 7',
            'position' => 'Админ',
            'code' => '77777',
            'email' => 'Admin@admin.com'
        ]);
        User::create([
            'name' => 'Имя 8',
            'sec_name' => 'Фамилия 8',
            'th_name' => 'Отчество 8',
            'position' => 'Бухгалтер',
            'code' => '88888',
            'email' => 'Accountant@accountant.com'
        ]);
    }
}
