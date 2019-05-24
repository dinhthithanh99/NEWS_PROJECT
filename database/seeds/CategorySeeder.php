<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->insert([
            ['name' =>'Thể Thao' ],
            ['name' =>'Thời Sự' ],
            ['name' =>'Công Nghệ' ],
            ['name' =>'Thời Trang' ],
            ['name' =>'Sức Khỏe' ],
            ['name' =>'Chính Trị' ],
            ['name' =>'Người Nổi Tiếng' ],
            ['name' =>'QP-AN' ],
            ['name' =>'Môi Trường' ],
            ['name' =>'Giáo Dục' ],
        ]);
    }
}
