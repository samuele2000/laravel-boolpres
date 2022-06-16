<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['label' => 'Film', 'color' => 'danger'],
            ['label' => 'Tech', 'color' => 'warning'],
            ['label' => 'Photo', 'color' => 'success'],
            ['label' => 'Lifestyle', 'color' => 'primary'],
        ];

        foreach( $categories as $category ){
            $newCategory = new Category();
            $newCategory->label = $category['label'];
            $newCategory->color = $category['color'];
            $newCategory->save();
        }
    }
}
