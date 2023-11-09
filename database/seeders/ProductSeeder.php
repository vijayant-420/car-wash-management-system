<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table('products')->insert([
            [
                'name'=>'Paneer Tikka',
                "price"=>"150",
                "description"=>"Delicious Starter",
                "category"=>"starter",
                "gallery"=>"https://www.cookwithkushi.com/wp-content/uploads/2023/02/paneer_tikka_at_home_01.jpg"
            ],
            [
                'name'=>'Chana Masala',
                "price"=>"120",
                "description"=>"Tempting masaledar Sabji",
                "category"=>"maincourse",
                "gallery"=>"https://www.indianveggiedelight.com/wp-content/uploads/2023/03/chana-masala-recipe.jpg"
            ],
            [
                'name'=>'Oreo Shake',
                "price"=>"80",
                "description"=>"Delicious Chocolate shake with crushed oreos",
                "category"=>"Shakes",
                "gallery"=>"https://tastesbetterfromscratch.com/wp-content/uploads/2020/03/Oreo-Milkshake-10.jpg"
            ],
            [
                'name'=>'Cheese Burger',
                "price"=>"90",
                "description"=>"Burger with aaloo tikki and veggies filled with different sauces",
                "category"=>"Burger",
                "gallery"=>"https://recipes.net/wp-content/uploads/2023/05/hardees-double-cheeseburger-recipe_d48b79ef43b714e98a3ad95a7ab9e12e.jpeg"
            ],
            [
                'name'=>'Paneer Pizza',
                "price"=>"200",
                "description"=>"Pizza with paneer and veggies topped with different sauces and cheese",
                "category"=>"Pizza",
                "gallery"=>"https://www.cookingcarnival.com/wp-content/uploads/2019/11/Paneer-Pizza.jpg"
            ]
        ]);
    }
}
