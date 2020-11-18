<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $category = new Category();

        $category->name = "EPS";
        $category->status = "ACTIVE";
        $category->save();

        $category1 = new Category();

        $category1->name = "IPS";
        $category1->status = "ACTIVE";
        $category1->save();

        $category2 = new Category();

        $category2->name = "POST";
        $category2->status = "ACTIVE";
        $category2->save();
    }
}
