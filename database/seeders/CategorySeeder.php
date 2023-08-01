<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'ギフト',
                'sort_order' => 1,
            ],
            [
                'name' => 'アクセサリー',
                'sort_order' => 2,
            ],
            [
                'name' => 'ファッション',
                'sort_order' => 3,
            ],
            [
                'name' => '日用品',
                'sort_order' => 4,
            ],
            [
                'name' => 'コーヒー',
                'sort_order' => 5,
            ],
            [
                'name' => 'アウトドア',
                'sort_order' => 6,
            ],
            [
                'name' => 'その他',
                'sort_order' => 7,
            ],
        ]);   

        DB::table('secondary_categories')->insert([
            [
                'name' => 'サマーギフト',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'クリスマスギフト',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ギフト券',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => '指輪',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'ネックレス',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'バングル',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
            [
                'name' => 'メンズファッション',
                'sort_order' => 7,
                'primary_category_id' => 3
            ],
            [
                'name' => 'レディースファッション',
                'sort_order' => 8,
                'primary_category_id' => 3
            ],
            [
                'name' => 'キッズファッション',
                'sort_order' => 9,
                'primary_category_id' => 3
            ],
            [
                'name' => '家庭用品',
                'sort_order' => 10,
                'primary_category_id' => 4
            ],
            [
                'name' => '掃除用品',
                'sort_order' => 11,
                'primary_category_id' => 4
            ],
            [
                'name' => 'バス用品',
                'sort_order' => 12,
                'primary_category_id' => 4
            ],
            [
                'name' => 'エスプレッソ',
                'sort_order' => 13,
                'primary_category_id' => 5
            ],
            [
                'name' => 'アメリカーノ',
                'sort_order' => 14,
                'primary_category_id' => 5
            ],
            [
                'name' => 'カフェモカ',
                'sort_order' => 15,
                'primary_category_id' => 5
            ],
            [
                'name' => 'キャンプ用',
                'sort_order' => 16,
                'primary_category_id' => 6
            ],
            [
                'name' => '登山用',
                'sort_order' => 17,
                'primary_category_id' => 6
            ],
            [
                'name' => '調理器具',
                'sort_order' => 18,
                'primary_category_id' => 6
            ],
            [
                'name' => 'PC',
                'sort_order' => 19,
                'primary_category_id' => 7
            ],
            [
                'name' => 'その他',
                'sort_order' => 20,
                'primary_category_id' => 7
            ],
        ]);   
    }
}
