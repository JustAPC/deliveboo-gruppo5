<?php

use Illuminate\Database\Seeder;
use App\Models\Dishcategory;

class DishcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'nigiri', 'tempura', 'sashimi', 'antipasti', 'pizza',
            'hamburger', 'zuppe', 'primi', 'secondi', 'contorni', 'fritti',
            'dessert', 'gelati', 'pizza dolce', 'bevande', 'vini'
        ];
        foreach ($categories as $category) {
            $newCategory = new Dishcategory();
            $newCategory->name = $category;
            $newCategory->save();
        }
    }
}
