<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(50)->create(); //向users表中插入50条模拟数据

        $user = User::find(1); //插入完后，找到 id 为 1 的用户

        $user->name = "tuxuanxuan"; //设置 用户名

        $user->email = "tuxuanxuan@test.com"; //设置 邮箱

        $user->password = bcrypt('tuxuanxuan'); //设置 密码

        $user->save(); //保存
    }
}
