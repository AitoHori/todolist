<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TododataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => '資料作成'
        ];
        DB::table('tododata')->insert($param);
        $param = [
            'content' => '管理画面精査'
        ];
        DB::table('tododata')->insert($param);
        $param = [
            'content' => '定例会'
        ];
        DB::table('tododata')->insert($param);
    }
}
