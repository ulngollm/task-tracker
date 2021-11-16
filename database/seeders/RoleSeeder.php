<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    static $roles = [
        'дизайнер',
        'менеджер',
        'фронтендер',
        'бэкендер',
        'тестер',
        'devOps'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::$roles as $role){
            DB::table('roles')->insert([
                "name"=>$role
            ]);
        }
    }
}
