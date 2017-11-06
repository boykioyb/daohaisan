<?php

use Illuminate\Database\Seeder;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['meta_title' => 'Tin khuyến mãi', 'meta_keywords' => 'tin khuyến mãi', 'name' => 'Tin khuyến mãi', 'slug' => 'tin-khuyen-mai', 'parent_id' => 0,'position'=>'main-menu', 'status' => 0],
            ['meta_title' => 'Món ngon', 'meta_keywords' => 'Món ngon', 'name' => 'Món ngon', 'slug' => 'mon-ngon', 'parent_id' => 0, 'position'=>'main-menu', 'status' => 0],
            ['meta_title' => 'Khách Hàng', 'meta_keywords' => 'Khách Hàng', 'name' => 'Khách Hàng', 'slug' => 'khach-hang', 'parent_id' => 0,'position'=>'main-menu',  'status' => 1],
        ];
        foreach ($category as $val){
            DB::table('categories')->insert($val);
        }
    }
}
