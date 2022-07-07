<?php

use Illuminate\Database\Seeder;
use App\Models\Dish;
use Faker\Generator as Faker;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Ristorante Giapponese Cinese Le De Sen

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Zuppa con Spaghetti di Soia';
        $dish->ingredients = 'spaghetti di soia, zaicai e cipolla';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Zuppa con Pollo e Mais';
        $dish->ingredients = 'pollo e mais';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Zuppa Agro Piccante';
        $dish->ingredients = 'bambu, funghi, tofu e uova';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Zuppa di Miso';
        $dish->ingredients = 'cipolla e tofu';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Ramen';
        $dish->ingredients = 'polpa di granchio, carote, alghe e uova';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Yaki Udon';
        $dish->ingredients = 'frutto di mare, uova e verdure';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Sashimi Scampi';
        $dish->quantity = '3';
        $dish->ingredients = 'scampi';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 3;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Sashimi Amaebi';
        $dish->quantity = '3';
        $dish->ingredients = 'gamberoni rossi';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 3;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Sashimi Salmone';
        $dish->quantity = '3';
        $dish->ingredients = 'salmone';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 3;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Nigiri Salmone al Forno Nero';
        $dish->quantity = '4';
        $dish->ingredients = 'salmone, arachidi, maionese e salsa teriyaki';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 1;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Nigiri Spigola';
        $dish->quantity = '4';
        $dish->ingredients = 'spigola';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 1;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Ebi Tempura';
        $dish->ingredients = 'gamberi';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 2;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Yashi Tempura';
        $dish->ingredients = 'verdure miste';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 2;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Tiramisù';
        $dish->ingredients = 'mascarpone, savoiardi, uova, caffè, zucchero, cacao in polvere';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Nutella Maki';
        $dish->quantity = '6';
        $dish->ingredients = 'riso, banane e nutella';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Acqua Naturale';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Acqua Frizzante';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Coca Cola';
        $dish->ingredients = '';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 5);
        $dish->description = '1L';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Birra';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '33cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Asahi';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Falanghina Villa Matilde';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Gewurztraminer Kurtash';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Vermentino Sardegna';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Shiraz Casale del Giglio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Chianti San Lorenzo Fattorie Melini';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Montepulciano Botte Vannelli';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Montepulciano Botte Vannelli';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        // Fischio Sushi

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Zuppa con Spaghetti di Soia';
        $dish->ingredients = 'spaghetti di soia; zaicai e cipolla';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Zuppa con Pollo e Mais';
        $dish->ingredients = 'pollo e mais';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Zuppa Agro Piccante';
        $dish->ingredients = 'bambu, funghi, tofu e uova';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Zuppa di Miso';
        $dish->ingredients = 'cipolla e tofu';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Ramen';
        $dish->ingredients = 'polpa di granchio, carote, alghe e uova';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Yaki Udon';
        $dish->ingredients = 'frutto di mare, uova e verdure';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Sashimi Scampi';
        $dish->quantity = '3';
        $dish->ingredients = 'scampi';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 3;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Sashimi Amaebi';
        $dish->quantity = '3';
        $dish->ingredients = 'gamberoni rossi';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 3;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Sashimi Salmone';
        $dish->quantity = '3';
        $dish->ingredients = 'salmone';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 3;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Nigiri Salmone al Forno Nero';
        $dish->quantity = '4';
        $dish->ingredients = 'salmone, arachidi, maionese e salsa teriyaki';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 1;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Nigiri Spigola';
        $dish->quantity = '4';
        $dish->ingredients = 'spigola';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 1;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Ebi Tempura';
        $dish->ingredients = 'gamberi';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 2;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Yashi Tempura';
        $dish->ingredients = 'verdure miste';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 2;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Tiramisù';
        $dish->ingredients = 'mascarpone, savoiardi, uova, caffè, zucchero, cacao in polvere';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Nutella Maki';
        $dish->quantity = '6';
        $dish->ingredients = 'riso, banane e nutella';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Acqua Naturale';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Acqua Frizzante';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Coca Cola';
        $dish->ingredients = '';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 5);
        $dish->description = '1L';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Birra';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '33cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Asahi';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Falanghina Villa Matilde';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Gewurztraminer Kurtash';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Vermentino Sardegna';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Shiraz Casale del Giglio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Chianti San Lorenzo Fattorie Melini';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Montepulciano Botte Vannelli';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Montepulciano Botte Vannelli';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        // Pony Burger

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Burger Boss';
        $dish->ingredients = 'hamburger 200g, bacon croccante, cheddar, lattuga, pomodoro, cipolla, cetriolo, maionese, ketchup e senape';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 6;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Cheese Burger';
        $dish->ingredients = 'hamburger 200g, cheddar, pomodoro, lattuga e salsa Pony Burger';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 6;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Bacon Cheese Burger';
        $dish->ingredients = 'hamburger 200g, cheddar, bacon croccante, pomodoro, lattuga e salsa Pony Burger';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 6;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Bacon Eggs Burger';
        $dish->ingredients = 'hamburger 200g, cheddar, bacon croccante, uovo grigliato, cipolla caramellata, lattuga e salsa Pony Burger';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 6;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Cheese Burger';
        $dish->ingredients = 'hamburger 200g, cheddar, pomodoro, lattuga e salsa Pony Burger';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 6;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Patatine Dippers';
        $dish->ingredients = 'patate fritte';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 11;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Mozzarella Sticks';
        $dish->quantity = 5;
        $dish->ingredients = 'mozzarella impanata e fritta';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 11;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Chicken Wings Buffalo';
        $dish->quantity = 5;
        $dish->ingredients = 'ali di pollo fritte';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 11;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Corn Flakes Nuggets';
        $dish->quantity = 5;
        $dish->ingredients = 'petti di pollo fritti';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 11;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Acqua Naturale';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Acqua Frizzante';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Bibita 1,5L';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '1,5l';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Birra Superlemon';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '33cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Birra Bock';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '33cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Birra Ritual Lab';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '33cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        // Bottega 35

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Pizza Margherita';
        $dish->ingredients = 'pomodoro, fior di latte, basilico';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Marinara';
        $dish->ingredients = 'pomodoro, origano, aglio';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Diavola';
        $dish->ingredients = 'pomodoro, fior di latte, salame piccante';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Boscaiola';
        $dish->ingredients = 'fior di latte, funghi, salsiccia';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Capricciosa';
        $dish->ingredients = 'pomodoro, fior di latte, funghi, uovo, carciofini, olive, prosciutto crudo';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Vegetale';
        $dish->ingredients = 'fior di latte, verdure grigliate';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Crostino';
        $dish->ingredients = 'fior di latte, prosciutto cotto';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Quattro Formaggi';
        $dish->ingredients = 'fior di latte, provola, gorgonzola, emmentall';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Bresaola';
        $dish->ingredients = 'bresaola, rucola, scaglie di parmigiano';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Napoli';
        $dish->ingredients = 'pomodoro, fior di latte, alici';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = 'verdure miste';
        $dish->dishcategory_id = 5;
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Supplì';
        $dish->quantity = '1';
        $dish->ingredients = 'riso, ragù alla bolognese, pangrattato';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 11;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Olive Ascolane';
        $dish->quantity = '4';
        $dish->ingredients = 'carne bovina, alive verdi, pangrattato';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 11;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Crocchette di patate';
        $dish->quantity = '2';
        $dish->ingredients = 'patate bollite, pangrattato';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 11;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Pizza con nutella';
        $dish->ingredients = 'nutella';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 14;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Tiramisù';
        $dish->ingredients = 'mascarpone, savoiardi, uova, caffè, zucchero, cacao in polvere';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Acqua Naturale';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Acqua Frizzante';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Coca Cola';
        $dish->ingredients = '';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 5);
        $dish->description = '1L';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Birra Del Borgo';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.33cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Birra Ritual Lab';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.33cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Birra Weiss';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Vermentino Sardegna';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Shiraz Casale del Giglio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Chianti San Lorenzo Fattorie Melini';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Montepulciano Botte Vannelli';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Montepulciano Botte Vannelli';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        // Smile One

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Pizza Margherita';
        $dish->ingredients = 'pomodoro, fior di latte, basilico';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Marinara';
        $dish->ingredients = 'pomodoro, origano, aglio';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Diavola';
        $dish->ingredients = 'pomodoro, fior di latte, salame piccante';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Boscaiola';
        $dish->ingredients = 'fior di latte, funghi, salsiccia';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Capricciosa';
        $dish->ingredients = 'pomodoro, fior di latte, funghi, uovo, carciofini, olive, prosciutto crudo';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Vegetale';
        $dish->ingredients = 'fior di latte, verdure grigliate';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Crostino';
        $dish->ingredients = 'fior di latte, prosciutto cotto';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Quattro Formaggi';
        $dish->ingredients = 'fior di latte, provola, gorgonzola, emmentall';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Bresaola';
        $dish->ingredients = 'bresaola, rucola, scaglie di parmigiano';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Napoli';
        $dish->ingredients = 'pomodoro, fior di latte, alici';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = 'verdure miste';
        $dish->dishcategory_id = 5;
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Supplì';
        $dish->quantity = '1';
        $dish->ingredients = 'riso, ragù alla bolognese, pangrattato';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 11;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Olive Ascolane';
        $dish->quantity = '4';
        $dish->ingredients = 'carne bovina, alive verdi, pangrattato';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 11;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Crocchette di patate';
        $dish->quantity = '2';
        $dish->ingredients = 'patate bollite, pangrattato';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 11;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Pizza con nutella';
        $dish->ingredients = 'nutella';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 14;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Tiramisù';
        $dish->ingredients = 'mascarpone, savoiardi, uova, caffè, zucchero, cacao in polvere';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Acqua Naturale';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Acqua Frizzante';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Coca Cola';
        $dish->ingredients = '';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 5);
        $dish->description = '1L';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Birra Del Borgo';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.33cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Birra Ritual Lab';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.33cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Birra Weiss';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Vermentino Sardegna';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Shiraz Casale del Giglio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Chianti San Lorenzo Fattorie Melini';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Montepulciano Botte Vannelli';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Montepulciano Botte Vannelli';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->save();

        // La Belle Epoque

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Insalata di Seppioline e Carciofi Julienne';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 12);
        $dish->description = 'Insalatina di seppioline alla piastra e carciofi julienne';
        $dish->dishcategory_id = 4;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Alicette locali marinate';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 12);
        $dish->description = 'Alicette locali marinate';
        $dish->dishcategory_id = 4;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Capesante cotte ai carboni';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 6, 14);
        $dish->description = 'Insalatina di seppioline alla piastra e carciofi julienne';
        $dish->dishcategory_id = 4;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Risotto alla pescatora';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Paccheri di Gragnano al ragù di cernia';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Spaghettoni alla bottarga di muggine';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Scampi alla brace';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Gamberoni alla catalana';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Gamberoni cognac';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 10, 16);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Scampi alla brace';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 8, 14);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Patate novelle cotte ai carboni';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 6);
        $dish->description = '';
        $dish->dishcategory_id = 10;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Carciofo alla brace';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 6);
        $dish->description = '';
        $dish->dishcategory_id = 10;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Verdure di stagione saltate in padella';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 6);
        $dish->description = '';
        $dish->dishcategory_id = 10;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Tiramisù';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 7);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Millefoglie';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 7);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Semifreddo al torroncino';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 7);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Acqua naturale';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Acqua frizzante';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Coca-Cola';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Fanta';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Ichnusa';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 5);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Traminer Elena Walch';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Falesco Tellus Chardonnay';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Jerman Sauvignon';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Trebbiano Abruzzo DOC Cocciopesto';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();


        // Ristorante Il Casaletto

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Insalata di Seppioline e Carciofi Julienne';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 12);
        $dish->description = 'Insalatina di seppioline alla piastra e carciofi julienne';
        $dish->dishcategory_id = 4;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Alicette locali marinate';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 12);
        $dish->description = 'Alicette locali marinate';
        $dish->dishcategory_id = 4;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Capesante cotte ai carboni';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 6, 14);
        $dish->description = 'Insalatina di seppioline alla piastra e carciofi julienne';
        $dish->dishcategory_id = 4;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Risotto alla pescatora';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Paccheri di Gragnano al ragù di cernia';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Spaghettoni alla bottarga di muggine';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Scampi alla brace';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Gamberoni alla catalana';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Gamberoni cognac';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 10, 16);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Scampi alla brace';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 8, 14);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Patate novelle cotte ai carboni';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 6);
        $dish->description = '';
        $dish->dishcategory_id = 10;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Carciofo alla brace';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 6);
        $dish->description = '';
        $dish->dishcategory_id = 10;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Verdure di stagione saltate in padella';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 6);
        $dish->description = '';
        $dish->dishcategory_id = 10;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Tiramisù';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 7);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Millefoglie';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 7);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Semifreddo al torroncino';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 7);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Acqua naturale';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Acqua frizzante';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Coca-Cola';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Fanta';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Ichnusa';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 5);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Traminer Elena Walch';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Falesco Tellus Chardonnay';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Jerman Sauvignon';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Trebbiano Abruzzo DOC Cocciopesto';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        // Gelosia Gelateria

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Vaschetta panna';
        $dish->ingredients = 'Panna';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 5);
        $dish->dishcategory_id = 13;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Vaschetta gelato 500g';
        $dish->ingredients = '4 gusti a scelta';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 12, 15);
        $dish->dishcategory_id = 13;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Vaschetta gelato 750g';
        $dish->ingredients = '6 gusti a scelta';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 18, 21);
        $dish->dishcategory_id = 13;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Vaschetta gelato 1kg';
        $dish->ingredients = '8 gusti a scelta';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 25, 30);
        $dish->dishcategory_id = 13;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Brioche Siciliane Semplici';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Brioche Venezianine Semplici';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Tiramisù al pistacchio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 4, 6);
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Mignon con cioccolato bianco';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Acqua Lilia naturale';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 2);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Succo di frutta';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Bibita in lattina';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->description = '25cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Alici Fritte';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 4;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Calamaretti Fritti';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 4;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Polpo e Patate';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 4;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Risotto alla crema di scampi';
        $dish->ingredients = 'riso, scampi, panna, pomodoro, olio';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Spaghettoni cozze e pecorino';
        $dish->ingredients = 'spaghettoni, cozze, pecorino, olio';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Cacio e pepe e gamberi rossi';
        $dish->ingredients = 'pecorino romano, pepe, tartare gamberi rossi';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Filetto di tonno alla piastra';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Filetto di spada alla piastra';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Sgombro alla siciliana';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Filetto di tonno alla piastra';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Grigliata mista';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Semifreddo al cocco';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 7);
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Cheesecacke ai frutti di bosco';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 7);
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Acqua naturale';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Acqua frizzante';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Coca-Cola';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Fanta';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Ichnusa';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 5);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Traminer Elena Walch';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Falesco Tellus Chardonnay';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Jerman Sauvignon';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Trebbiano Abruzzo DOC Cocciopesto';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Alici Fritte';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 4;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Calamaretti Fritti';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 4;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Polpo e Patate';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 4;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Risotto alla crema di scampi';
        $dish->ingredients = 'riso, scampi, panna, pomodoro, olio';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Spaghettoni cozze e pecorino';
        $dish->ingredients = 'spaghettoni, cozze, pecorino, olio';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Cacio e pepe e gamberi rossi';
        $dish->ingredients = 'pecorino romano, pepe, tartare gamberi rossi';
        $dish->available = 1;
        $dish->price = 1;
        // $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Filetto di tonno alla piastra';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Filetto di spada alla piastra';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Sgombro alla siciliana';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Filetto di tonno alla piastra';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Grigliata mista';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Semifreddo al cocco';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 7);
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Cheesecacke ai frutti di bosco';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 7);
        $dish->dishcategory_id = 12;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Acqua naturale';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Acqua frizzante';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Coca-Cola';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Fanta';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Ichnusa';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 5);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Traminer Elena Walch';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Falesco Tellus Chardonnay';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Jerman Sauvignon';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Trebbiano Abruzzo DOC Cocciopesto';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->save();
    }
}
