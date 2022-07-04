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
            'Nigiri', 'Tempura', 'Sashimi', 'Antipasti', 'Pizza',
            'Hamburger', 'Zuppe', 'Primi', 'Secondi', 'Contorni', 'Fritti',
            'Dessert', 'Gelati', 'Pizza dolce', 'Bevande', 'Vini'
        ];
        foreach ($categories as $category) {
            $newCategory = new Dishcategory();
            $newCategory->name = $category;
            $newCategory->save();
        }
    }
}
