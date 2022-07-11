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
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->image = 'https://www.labiolca.it/wp-content/uploads/2012/10/zuppa-noodles.jpg';
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Zuppa con Pollo e Mais';
        $dish->ingredients = 'pollo e mais';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->image = 'https://www.ricettadicucina.com/upload/recipe/3/8/d/1ecb4f0b4af32df4195f9a879d21073565b234aa.jpg?1606673296=&ezimgfmt=ng%3Awebp%2Fngcb2%2Frs%3Adevice%2Frscb2-1';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Zuppa Agro Piccante';
        $dish->ingredients = 'bambu, funghi, tofu e uova';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->image = 'https://wips.plug.it/cips/buonissimo.org/cms/2012/03/zuppa-piccante-del-sichuan.jpg?w=713&a=c&h=407';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Zuppa di Miso';
        $dish->ingredients = 'cipolla e tofu';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->image = 'https://primochef.it/wp-content/uploads/2019/09/SH_zuppa_di_miso.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Ramen';
        $dish->ingredients = 'polpa di granchio, carote, alghe e uova';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 8;
        $dish->image = 'https://media-assets.lacucinaitaliana.it/photos/620b62f4173bb3b63848fb6b/16:9/w_2560%2Cc_limit/iStock-623535742.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Yaki Udon';
        $dish->ingredients = 'frutto di mare, uova e verdure';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 8;
        $dish->image = 'https://blog.giallozafferano.it/cookingdada/wp-content/uploads/2020/11/img_20190207_144911.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Sashimi Scampi';
        $dish->quantity = '3';
        $dish->ingredients = 'scampi';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 3;
        $dish->image = 'https://okami.it/wp-content/uploads/2021/03/720x720_SashimiScampi.png';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Sashimi Amaebi';
        $dish->quantity = '3';
        $dish->ingredients = 'gamberoni rossi';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 3;
        $dish->image = 'https://www.shis.it/proxyvfs.axd/img_thumb/r22986/file-jpg?v=12726&ext=.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Sashimi Salmone';
        $dish->quantity = '3';
        $dish->ingredients = 'salmone';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 3;
        $dish->image = 'https://www.stuzzisushi.it/wp-content/uploads/2016/11/IMG_0496-1.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Nigiri Salmone al Forno Nero';
        $dish->quantity = '4';
        $dish->ingredients = 'salmone, arachidi, maionese e salsa teriyaki';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 1;
        $dish->image = 'https://i0.wp.com/matsu-sushi.it/wp-content/uploads/2020/05/nigiri-salmone-1.jpg?fit=700%2C700&ssl=1';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Nigiri Spigola';
        $dish->quantity = '4';
        $dish->ingredients = 'spigola';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 1;
        $dish->image = 'https://modica.gohan-sushi.it/upload/cache/immagini/prodotti/nigiri/sakuramenu01_210-1568x1096.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Ebi Tempura';
        $dish->ingredients = 'gamberi';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 2;
        $dish->image = 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/E3AF6E67-0180-4A0A-8E8F-FF8CF8C97939/Derivates/759c5ff9-a816-41f1-8ae5-dd05dd304856.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Yashi Tempura';
        $dish->ingredients = 'verdure miste';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 2;
        $dish->image = 'https://cdn.shopify.com/s/files/1/0550/7937/0850/files/Tempura4.jpg?v=1640623850';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Tiramisù';
        $dish->ingredients = 'mascarpone, savoiardi, uova, caffè, zucchero, cacao in polvere';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 12;
        $dish->image = 'https://ricetta.it/Uploads/Imgs/tiramisu-classico.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Nutella Maki';
        $dish->quantity = '6';
        $dish->ingredients = 'riso, banane e nutella';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 12;
        $dish->image = 'https://giappoke.com/wp-content/uploads/2021/01/Progetto-senza-titolo-5.png';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Acqua Naturale';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.topbevande.it/images/thumbs/0085776_acqua-lilia-naturale-50cl-pet-confezione-da-24-bottiglie-_780.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Acqua Frizzante';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.horeca.live/shop/5219-large_default/sanbenedetto-gas-05-lt-pet.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Coca Cola';
        $dish->ingredients = '';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 5);
        $dish->description = '1L';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/CocaColaBottle_background_free.jpg/640px-CocaColaBottle_background_free.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Birra';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '33cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.rotundodrink.it/wp-content/uploads/2018/06/Birra-Bjorne-Beer-cl-33.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Asahi';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.sushitecazen.it/wp-content/uploads/2019/08/birra-asahi-super-dry.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Falanghina Villa Matilde';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://enotecacostantinipiero.it/12135-large_default/Falanghina-Villa-Matilde-2018-0-75-lt.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Gewurztraminer Kurtash';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.topbevande.it/images/thumbs/0088095_vino-kurtatsch-gewurztraminer-riserva-brental-sudtirol-alto-adige-doc-75cl-19_780.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Vermentino Sardegna';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://cuordisardegna.com/1942-large_default/vino-vermentino-di-sardegna-doc-sella-e-mosca.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Shiraz Casale del Giglio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://rhsdelivery.it/wp-content/uploads/2022/01/SHIRAZ-PICCOLO.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Chianti San Lorenzo Fattorie Melini';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://lovelivegift.it/wp-content/uploads/2020/07/chianti_san_lorenzo_vin00687.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Montepulciano Botte Vannelli';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://images.vivino.com/thumbs/00y7ttsocfn1a_375x500.jpg';
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 1;
        $dish->name = 'Passito Caluso';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.grandibottiglie.com/11252-thickbox_default/passito-di-caluso-1963-boux-massimo.jpg';
        $dish->save();

        // Fischio Sushi
 $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Zuppa con Spaghetti di Soia';
        $dish->ingredients = 'spaghetti di soia, zaicai e cipolla';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->image = 'https://www.labiolca.it/wp-content/uploads/2012/10/zuppa-noodles.jpg';
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Zuppa con Pollo e Mais';
        $dish->ingredients = 'pollo e mais';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->image = 'https://www.ricettadicucina.com/upload/recipe/3/8/d/1ecb4f0b4af32df4195f9a879d21073565b234aa.jpg?1606673296=&ezimgfmt=ng%3Awebp%2Fngcb2%2Frs%3Adevice%2Frscb2-1';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Zuppa Agro Piccante';
        $dish->ingredients = 'bambu, funghi, tofu e uova';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->image = 'https://wips.plug.it/cips/buonissimo.org/cms/2012/03/zuppa-piccante-del-sichuan.jpg?w=713&a=c&h=407';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Zuppa di Miso';
        $dish->ingredients = 'cipolla e tofu';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 7;
        $dish->image = 'https://primochef.it/wp-content/uploads/2019/09/SH_zuppa_di_miso.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Ramen';
        $dish->ingredients = 'polpa di granchio, carote, alghe e uova';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 8;
        $dish->image = 'https://media-assets.lacucinaitaliana.it/photos/620b62f4173bb3b63848fb6b/16:9/w_2560%2Cc_limit/iStock-623535742.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Yaki Udon';
        $dish->ingredients = 'frutto di mare, uova e verdure';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 8;
        $dish->image = 'https://blog.giallozafferano.it/cookingdada/wp-content/uploads/2020/11/img_20190207_144911.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Sashimi Scampi';
        $dish->quantity = '3';
        $dish->ingredients = 'scampi';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 3;
        $dish->image = 'https://okami.it/wp-content/uploads/2021/03/720x720_SashimiScampi.png';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Sashimi Amaebi';
        $dish->quantity = '3';
        $dish->ingredients = 'gamberoni rossi';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 3;
        $dish->image = 'https://www.shis.it/proxyvfs.axd/img_thumb/r22986/file-jpg?v=12726&ext=.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Sashimi Salmone';
        $dish->quantity = '3';
        $dish->ingredients = 'salmone';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 3;
        $dish->image = 'https://www.stuzzisushi.it/wp-content/uploads/2016/11/IMG_0496-1.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Nigiri Salmone al Forno Nero';
        $dish->quantity = '4';
        $dish->ingredients = 'salmone, arachidi, maionese e salsa teriyaki';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 1;
        $dish->image = 'https://i0.wp.com/matsu-sushi.it/wp-content/uploads/2020/05/nigiri-salmone-1.jpg?fit=700%2C700&ssl=1';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Nigiri Spigola';
        $dish->quantity = '4';
        $dish->ingredients = 'spigola';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 1;
        $dish->image = 'https://modica.gohan-sushi.it/upload/cache/immagini/prodotti/nigiri/sakuramenu01_210-1568x1096.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Ebi Tempura';
        $dish->ingredients = 'gamberi';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 2;
        $dish->image = 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/E3AF6E67-0180-4A0A-8E8F-FF8CF8C97939/Derivates/759c5ff9-a816-41f1-8ae5-dd05dd304856.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Yashi Tempura';
        $dish->ingredients = 'verdure miste';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 2;
        $dish->image = 'https://cdn.shopify.com/s/files/1/0550/7937/0850/files/Tempura4.jpg?v=1640623850';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Tiramisù';
        $dish->ingredients = 'mascarpone, savoiardi, uova, caffè, zucchero, cacao in polvere';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 12;
        $dish->image = 'https://ricetta.it/Uploads/Imgs/tiramisu-classico.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Nutella Maki';
        $dish->quantity = '6';
        $dish->ingredients = 'riso, banane e nutella';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->dishcategory_id = 12;
        $dish->image = 'https://giappoke.com/wp-content/uploads/2021/01/Progetto-senza-titolo-5.png';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Acqua Naturale';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.topbevande.it/images/thumbs/0085776_acqua-lilia-naturale-50cl-pet-confezione-da-24-bottiglie-_780.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Acqua Frizzante';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.horeca.live/shop/5219-large_default/sanbenedetto-gas-05-lt-pet.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Coca Cola';
        $dish->ingredients = '';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 5);
        $dish->description = '1L';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/CocaColaBottle_background_free.jpg/640px-CocaColaBottle_background_free.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Birra';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '33cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.rotundodrink.it/wp-content/uploads/2018/06/Birra-Bjorne-Beer-cl-33.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Asahi';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.sushitecazen.it/wp-content/uploads/2019/08/birra-asahi-super-dry.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Falanghina Villa Matilde';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://enotecacostantinipiero.it/12135-large_default/Falanghina-Villa-Matilde-2018-0-75-lt.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Gewurztraminer Kurtash';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.topbevande.it/images/thumbs/0088095_vino-kurtatsch-gewurztraminer-riserva-brental-sudtirol-alto-adige-doc-75cl-19_780.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Vermentino Sardegna';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://cuordisardegna.com/1942-large_default/vino-vermentino-di-sardegna-doc-sella-e-mosca.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Shiraz Casale del Giglio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://rhsdelivery.it/wp-content/uploads/2022/01/SHIRAZ-PICCOLO.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Chianti San Lorenzo Fattorie Melini';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://lovelivegift.it/wp-content/uploads/2020/07/chianti_san_lorenzo_vin00687.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Montepulciano Botte Vannelli';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://images.vivino.com/thumbs/00y7ttsocfn1a_375x500.jpg';
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 2;
        $dish->name = 'Passito Caluso';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.grandibottiglie.com/11252-thickbox_default/passito-di-caluso-1963-boux-massimo.jpg';
        $dish->save();


        // Pony Burger

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Burger Boss';
        $dish->ingredients = 'hamburger 200g, bacon croccante, cheddar, lattuga, pomodoro, cipolla, cetriolo, maionese, ketchup e senape';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 6;
        $dish->image = 'https://www.burgerboss.it/wp-content/uploads/2020/07/IMG_2965-690x500.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Cheese Burger';
        $dish->ingredients = 'hamburger 200g, cheddar, pomodoro, lattuga e salsa Pony Burger';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 6;
        $dish->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Cheeseburger.jpg/1200px-Cheeseburger.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Bacon Cheese Burger';
        $dish->ingredients = 'hamburger 200g, cheddar, bacon croccante, pomodoro, lattuga e salsa Pony Burger';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 6;
        $dish->image = 'https://bakeitwithlove.com/wp-content/uploads/2021/08/Western-Bacon-Cheeseburger-sq.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Bacon Eggs Burger';
        $dish->ingredients = 'hamburger 200g, cheddar, bacon croccante, uovo grigliato, cipolla caramellata, lattuga e salsa Pony Burger';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 6;
        $dish->image = 'https://d31qjkbvvkyanm.cloudfront.net/images/recipe-images/bacon-egg--cheese-burger-with-maple-butter-detail-f87940d5.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Cheese Burger XXL';
        $dish->ingredients = 'hamburger 200g, cheddar, pomodoro, lattuga e salsa Pony Burger';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 6;
        $dish->image = 'https://media.gqitalia.it/photos/5d56b18eee3934000869d3a0/16:9/w_2560%2Cc_limit/GettyImages-1032835444.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Patatine Dippers';
        $dish->ingredients = 'patate fritte';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 11;
        $dish->image = 'https://www.dirussosrl.it/wp-content/uploads/2018/07/Patate-Dippers-LambWeston.png';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Mozzarella Sticks';
        $dish->quantity = 5;
        $dish->ingredients = 'mozzarella impanata e fritta';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 11;
        $dish->image = 'https://static.onecms.io/wp-content/uploads/sites/43/2022/04/07/23596-fried-mozzarella-cheese-sticks-3x2-252.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Chicken Wings Buffalo';
        $dish->quantity = 5;
        $dish->ingredients = 'ali di pollo fritte';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 11;
        $dish->image = 'https://www.seriouseats.com/thmb/tyPoXL9L43B636__wbdMeicPBWA=/1125x844/filters:fill(auto,1)/the-best-buffalo-wings-oven-fried-wings-recipe-hero-dcc412b6e26444b4a2112d4402f039ae.JPG';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Corn Flakes Nuggets';
        $dish->quantity = 5;
        $dish->ingredients = 'petti di pollo fritti';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 20);
        $dish->dishcategory_id = 11;
        $dish->image = 'https://www.ilovecooking.ie/wp-content/uploads/2014/02/cornflake-chicken-nuggets.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Acqua Naturale';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.bereacasa.it/wp-content/uploads/2017/12/82972325_sanbened05.gif';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Acqua Frizzante';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://elim.shop/media/com_eshop/products/000015108.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Bibita 1,5L';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '1,5l';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://static.sorgentenatura.it/data/prod/zoom/m/molecola-fairtrade.jpg?_=1572526552';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Birra Superlemon';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '33cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.cantinadellabirra.it/media/catalog/product/cache/1/image/600x600/9df78eab33525d08d6e5fb8d27136e95/r/t/rtl.double_super_lemon.png';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Birra Bock';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '33cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.gourmetencasa-tcm.com/15358-large_default/super-bock-33cl.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 10;
        $dish->name = 'Birra Ritual Lab';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '33cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://cdn.shopify.com/s/files/1/0374/9517/7351/files/2_600x600@2x.jpg?v=1586527131';
        $dish->save();

        // Bottega 35

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Pizza Margherita';
        $dish->ingredients = 'pomodoro, fior di latte, basilico';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://primochef.it/wp-content/uploads/2019/08/SH_pizza_fatta_in_casa-1200x800.jpg';
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Marinara';
        $dish->ingredients = 'pomodoro, origano, aglio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://upload.wikimedia.org/wikipedia/commons/1/11/Pizza_marinara.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Diavola';
        $dish->ingredients = 'pomodoro, fior di latte, salame piccante';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://foodandchips.com/wp-content/uploads/2019/02/BFV36537_CC2017_2IngredintDough4Ways-FB.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Boscaiola';
        $dish->ingredients = 'fior di latte, funghi, salsiccia';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://blog.giallozafferano.it/cucinaconmiasorella/wp-content/uploads/2019/05/Pizza-alla-boscaiola-bianca-or.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Capricciosa';
        $dish->ingredients = 'pomodoro, fior di latte, funghi, uovo, carciofini, olive, prosciutto crudo';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://upload.wikimedia.org/wikipedia/commons/2/2a/Pizza_capricciosa.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Vegetale';
        $dish->ingredients = 'fior di latte, verdure grigliate';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://primochef.it/wp-content/uploads/2021/07/SH_pizza_vegetale.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Crostino';
        $dish->ingredients = 'fior di latte, prosciutto cotto';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://blog.giallozafferano.it/rocococo/wp-content/uploads/2014/06/cibo-639-crostino-di-pizza.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Quattro Formaggi';
        $dish->ingredients = 'fior di latte, provola, gorgonzola, emmentall';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://www.buttalapasta.it/wp-content/uploads/pizza-ai-4-formaggi-1200x802.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Bresaola';
        $dish->ingredients = 'bresaola, rucola, scaglie di parmigiano';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://www.oggi.it/cucina/wp-content/uploads/sites/19/2019/11/10.-Novembre-Pizza-taleggio-e-bresaola-Federico-Della-Vecchia-470x377.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Napoli';
        $dish->ingredients = 'pomodoro, fior di latte, alici';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = 'verdure miste';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://www.donnamoderna.com/content/uploads/2021/08/pizza-napoli.jpg';
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Supplì';
        $dish->quantity = '1';
        $dish->ingredients = 'riso, ragù alla bolognese, pangrattato';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 11;
        $dish->image = 'https://www.ricettedalmondo.it/images/foto-ricette/s/32143-suppli-al-telefono.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Olive Ascolane';
        $dish->quantity = '4';
        $dish->ingredients = 'carne bovina, alive verdi, pangrattato';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 11;
        $dish->image = 'https://www.giallozafferano.it/images/ricette/2/253/foto_hd/hd650x433_wm.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Crocchette di patate';
        $dish->quantity = '2';
        $dish->ingredients = 'patate bollite, pangrattato';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 11;
        $dish->image = 'https://www.lacucinaimperfetta.com/wp-content/uploads/2014/06/Crocchette-di-patate.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Pizza con nutella';
        $dish->ingredients = 'nutella';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 14;
        $dish->image = 'https://www.misya.info/wp-content/uploads/2019/07/pizza-alla-nutella.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Tiramisù';
        $dish->ingredients = 'mascarpone, savoiardi, uova, caffè, zucchero, cacao in polvere';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->image = 'https://www.buttalapasta.it/wp-content/uploads/2012/04/ricetta-tiramisu-classico.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Acqua Naturale';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.comunianvini.it/shop/1960-medium_default/acqua-san-benedetto-1-2-lt-nat-pet-x-24.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Acqua Frizzante';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://elim.shop/media/com_eshop/products/000015108.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Coca Cola';
        $dish->ingredients = '';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 5);
        $dish->description = '1L';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://cdn.shopify.com/s/files/1/0258/9841/8247/articles/coca_cola_1_1024x1024.jpg?v=1601459387';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Birra Del Borgo';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.33cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://data.callmewine.com/imgprodotto/birra-ipa-reale-birra-del-borgo-75cl_19333_zoom.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Birra Ritual Lab';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.33cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR4JrYtdWgxCHG2xX_vbziNDL3xpX77Jxa-g&usqp=CAU';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Birra Weiss';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://s.tannico.it/media/catalog/product/cache/1/thumbnail/0dc2d03fe217f8c83829496872af24a0/e/x/ex_weiss_1.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Vermentino Sardegna';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.desparitalia.it/wp-content/uploads/2018/10/VERMENTINO_350x550.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Shiraz Casale del Giglio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.hellotaste.it/shop/4664-thickbox_default/lazio-rosso-igt-casale-del-giglio-shyraz-2013.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Chianti San Lorenzo Fattorie Melini';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://data.negoziodelvino.it/imgprodotto/chianti-san-lorenzo-docg_6923.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Montepulciano Botte Vannelli';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.gruppolazialebevande.it/wp-content/uploads/2016/04/0081_girlanpinotnero.png';
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 7;
        $dish->name = 'Merlot Veneto';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.vinoincasa.it/wp-content/uploads/2015/11/colferai-bottiglia-merlot-veneto1-600x600.jpg';
        $dish->save();

        // Smile One

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Pizza Margherita';
        $dish->ingredients = 'pomodoro, fior di latte, basilico';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://primochef.it/wp-content/uploads/2019/08/SH_pizza_fatta_in_casa-1200x800.jpg';
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Marinara';
        $dish->ingredients = 'pomodoro, origano, aglio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://upload.wikimedia.org/wikipedia/commons/1/11/Pizza_marinara.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Diavola';
        $dish->ingredients = 'pomodoro, fior di latte, salame piccante';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://foodandchips.com/wp-content/uploads/2019/02/BFV36537_CC2017_2IngredintDough4Ways-FB.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Boscaiola';
        $dish->ingredients = 'fior di latte, funghi, salsiccia';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://blog.giallozafferano.it/cucinaconmiasorella/wp-content/uploads/2019/05/Pizza-alla-boscaiola-bianca-or.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Capricciosa';
        $dish->ingredients = 'pomodoro, fior di latte, funghi, uovo, carciofini, olive, prosciutto crudo';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://upload.wikimedia.org/wikipedia/commons/2/2a/Pizza_capricciosa.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Vegetale';
        $dish->ingredients = 'fior di latte, verdure grigliate';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://primochef.it/wp-content/uploads/2021/07/SH_pizza_vegetale.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Crostino';
        $dish->ingredients = 'fior di latte, prosciutto cotto';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://blog.giallozafferano.it/rocococo/wp-content/uploads/2014/06/cibo-639-crostino-di-pizza.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Quattro Formaggi';
        $dish->ingredients = 'fior di latte, provola, gorgonzola, emmentall';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://www.buttalapasta.it/wp-content/uploads/pizza-ai-4-formaggi-1200x802.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Bresaola';
        $dish->ingredients = 'bresaola, rucola, scaglie di parmigiano';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://www.oggi.it/cucina/wp-content/uploads/sites/19/2019/11/10.-Novembre-Pizza-taleggio-e-bresaola-Federico-Della-Vecchia-470x377.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Napoli';
        $dish->ingredients = 'pomodoro, fior di latte, alici';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = 'verdure miste';
        $dish->dishcategory_id = 5;
        $dish->image = 'https://www.donnamoderna.com/content/uploads/2021/08/pizza-napoli.jpg';
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Supplì';
        $dish->quantity = '1';
        $dish->ingredients = 'riso, ragù alla bolognese, pangrattato';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 11;
        $dish->image = 'https://www.ricettedalmondo.it/images/foto-ricette/s/32143-suppli-al-telefono.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Olive Ascolane';
        $dish->quantity = '4';
        $dish->ingredients = 'carne bovina, alive verdi, pangrattato';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 11;
        $dish->image = 'https://www.giallozafferano.it/images/ricette/2/253/foto_hd/hd650x433_wm.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Crocchette di patate';
        $dish->quantity = '2';
        $dish->ingredients = 'patate bollite, pangrattato';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 11;
        $dish->image = 'https://www.lacucinaimperfetta.com/wp-content/uploads/2014/06/Crocchette-di-patate.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Pizza con nutella';
        $dish->ingredients = 'nutella';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 14;
        $dish->image = 'https://www.misya.info/wp-content/uploads/2019/07/pizza-alla-nutella.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Tiramisù';
        $dish->ingredients = 'mascarpone, savoiardi, uova, caffè, zucchero, cacao in polvere';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->image = 'https://www.buttalapasta.it/wp-content/uploads/2012/04/ricetta-tiramisu-classico.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Acqua Naturale';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.comunianvini.it/shop/1960-medium_default/acqua-san-benedetto-1-2-lt-nat-pet-x-24.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Acqua Frizzante';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://elim.shop/media/com_eshop/products/000015108.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Coca Cola';
        $dish->ingredients = '';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 5);
        $dish->description = '1L';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://cdn.shopify.com/s/files/1/0258/9841/8247/articles/coca_cola_1_1024x1024.jpg?v=1601459387';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Birra Del Borgo';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.33cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://data.callmewine.com/imgprodotto/birra-ipa-reale-birra-del-borgo-75cl_19333_zoom.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Birra Ritual Lab';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.33cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR4JrYtdWgxCHG2xX_vbziNDL3xpX77Jxa-g&usqp=CAU';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Birra Weiss';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://s.tannico.it/media/catalog/product/cache/1/thumbnail/0dc2d03fe217f8c83829496872af24a0/e/x/ex_weiss_1.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Vermentino Sardegna';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.desparitalia.it/wp-content/uploads/2018/10/VERMENTINO_350x550.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Shiraz Casale del Giglio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.hellotaste.it/shop/4664-thickbox_default/lazio-rosso-igt-casale-del-giglio-shyraz-2013.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Chianti San Lorenzo Fattorie Melini';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://data.negoziodelvino.it/imgprodotto/chianti-san-lorenzo-docg_6923.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Montepulciano Botte Vannelli';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.gruppolazialebevande.it/wp-content/uploads/2016/04/0081_girlanpinotnero.png';
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 8;
        $dish->name = 'Merlot Veneto';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '0.75cl';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.vinoincasa.it/wp-content/uploads/2015/11/colferai-bottiglia-merlot-veneto1-600x600.jpg';
        $dish->save();

        // La Belle Epoque

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Insalata di Seppioline e Carciofi Julienne';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 12);
        $dish->description = 'Insalatina di seppioline alla piastra e carciofi julienne';
        $dish->dishcategory_id = 4;
        $dish->image = 'http://4.bp.blogspot.com/-8Lasc8UkC2M/UXkuB6Hh6_I/AAAAAAAABkg/xqZIEWQqHJk/s1600/insalata-seppie-carciofi-10.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Alicette locali marinate';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 12);
        $dish->description = 'Alicette locali marinate';
        $dish->dishcategory_id = 4;
        $dish->image = 'https://www.foodblog.it/wp-content/uploads/2020/03/alici-marinate-alla-ligure-ricetta.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Capesante cotte ai carboni';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 6, 14);
        $dish->description = 'Insalatina di seppioline alla piastra e carciofi julienne';
        $dish->dishcategory_id = 4;
        $dish->image = 'https://i0.wp.com/blog.bbq4all.it/smokedbeard/wp-content/uploads/2017/02/IMG_8541-240x300.jpg?resize=240%2C300';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Risotto alla pescatora';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->image = 'https://wips.plug.it/cips/buonissimo.org/cms/2012/04/risotto-pescatora.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Paccheri di Gragnano al ragù di cernia';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->image = 'https://www.ilgiornaledelcibo.it/wp-content/uploads/2008/04/paccheri-alla-cernia.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Spaghettoni alla bottarga di muggine';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->image = 'https://www.sardegna.com/it/blog/wp-content/uploads/2011/09/spaghetti-bottarga-ricetta.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Scampi alla brace';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://media.grandchef.net/ricette/scampi-alla-griglia/galleria/scampi-alla-griglia.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Gamberoni alla catalana';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://www.tavolartegusto.it/wp/wp-content/uploads/2019/08/Gamberi-alla-catalana-Ricetta-Gamberi-alla-catalana-.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Gamberoni cognac';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 10, 16);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://blog.giallozafferano.it/annatorte/wp-content/uploads/2019/08/gamberoni-in-padella-al-brandy-e.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Scampi alla brace';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 8, 14);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://www.corriere.it/methode_image/2021/12/09/Cucina/Foto%20Cucina%20-%20Trattate/scampi%20alla%20griglia-k0OG-U3310186371911zFB-1124x631@Corriere-Web-Sezioni.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Patate novelle cotte ai carboni';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 6);
        $dish->description = '';
        $dish->dishcategory_id = 10;
        $dish->image = 'https://media-assets.lacucinaitaliana.it/photos/620b6490613e4caf44806c2a/16:9/w_1280,c_limit/patate-novelle2.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Carciofo alla brace';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 6);
        $dish->description = '';
        $dish->dishcategory_id = 10;
        $dish->image = 'https://media-assets.lacucinaitaliana.it/photos/61fd301f28bbd1b96fb68407/1:1/w_2560%2Cc_limit/Carciofi-alla-brace.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Verdure di stagione saltate in padella';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 6);
        $dish->description = '';
        $dish->dishcategory_id = 10;
        $dish->image = 'https://www.tavolartegusto.it/wp/wp-content/uploads/2019/05/Verdure-in-agrodolce-Ricetta-Verdure-in-agrodolce.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Tiramisù';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 7);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->image = 'https://img.comeunochef.com/2020-04/tiramisu-1.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Millefoglie';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 7);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->image = 'https://www.tavolartegusto.it/wp/wp-content/uploads/2018/06/Millefoglie-Ricetta-Millefoglie-alla-crema-1-1.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Semifreddo al torroncino';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 7);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->image = 'https://statics.cucchiaio.it/content/cucchiaio/it/ricette/2018/01/semifreddo-al-torroncino/jcr:content/header-par/image-single.img10.jpg/1517999544849.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Acqua naturale';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.comunianvini.it/shop/1960-medium_default/acqua-san-benedetto-1-2-lt-nat-pet-x-24.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Acqua frizzante';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://elim.shop/media/com_eshop/products/000015108.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Coca-Cola';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.topbevande.it/images/thumbs/0085545_coca-cola-original-33cl-confezione-da-24-barattoli-lattina_780.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Fanta';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.numeriprimishop.it/113648-large_default/fanta-lattina-cl33.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Ichnusa';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 5);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.basko.it/photo/2022/05/11/1/main/photo/pim-410128-1-main-20220510-193052.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Traminer Elena Walch';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.elenawalch.com/wp-content/uploads/2014/02/SELEZIONI-gewurztraminer.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Falesco Tellus Chardonnay';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.etilika.it/14050-large_default/chardonnay-lazio-igp-tellus-2021-falesco-cotarella.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Jerman Sauvignon';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.wineshop.it/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/a/sauvignon-jermann_4.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 3;
        $dish->name = 'Trebbiano Abruzzo DOC Cocciopesto';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.bollicinepescara.it/wp-content/uploads/2021/02/76-300x400.jpg';
        $dish->save();


        // Ristorante Il Casaletto

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Insalata di Seppioline e Carciofi Julienne';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 12);
        $dish->description = 'Insalatina di seppioline alla piastra e carciofi julienne';
        $dish->dishcategory_id = 4;
        $dish->image = 'http://4.bp.blogspot.com/-8Lasc8UkC2M/UXkuB6Hh6_I/AAAAAAAABkg/xqZIEWQqHJk/s1600/insalata-seppie-carciofi-10.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Alicette locali marinate';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 12);
        $dish->description = 'Alicette locali marinate';
        $dish->dishcategory_id = 4;
        $dish->image = 'https://www.foodblog.it/wp-content/uploads/2020/03/alici-marinate-alla-ligure-ricetta.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Capesante cotte ai carboni';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 6, 14);
        $dish->description = 'Insalatina di seppioline alla piastra e carciofi julienne';
        $dish->dishcategory_id = 4;
        $dish->image = 'https://i0.wp.com/blog.bbq4all.it/smokedbeard/wp-content/uploads/2017/02/IMG_8541-240x300.jpg?resize=240%2C300';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Risotto alla pescatora';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->image = 'https://wips.plug.it/cips/buonissimo.org/cms/2012/04/risotto-pescatora.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Paccheri di Gragnano al ragù di cernia';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->image = 'https://www.ilgiornaledelcibo.it/wp-content/uploads/2008/04/paccheri-alla-cernia.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Spaghettoni alla bottarga di muggine';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->image = 'https://www.sardegna.com/it/blog/wp-content/uploads/2011/09/spaghetti-bottarga-ricetta.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Scampi alla brace';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://media.grandchef.net/ricette/scampi-alla-griglia/galleria/scampi-alla-griglia.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Gamberoni alla catalana';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 9, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://www.tavolartegusto.it/wp/wp-content/uploads/2019/08/Gamberi-alla-catalana-Ricetta-Gamberi-alla-catalana-.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Gamberoni cognac';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 10, 16);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://blog.giallozafferano.it/annatorte/wp-content/uploads/2019/08/gamberoni-in-padella-al-brandy-e.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Scampi alla brace';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 8, 14);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://www.corriere.it/methode_image/2021/12/09/Cucina/Foto%20Cucina%20-%20Trattate/scampi%20alla%20griglia-k0OG-U3310186371911zFB-1124x631@Corriere-Web-Sezioni.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Patate novelle cotte ai carboni';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 6);
        $dish->description = '';
        $dish->dishcategory_id = 10;
        $dish->image = 'https://media-assets.lacucinaitaliana.it/photos/620b6490613e4caf44806c2a/16:9/w_1280,c_limit/patate-novelle2.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Carciofo alla brace';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 6);
        $dish->description = '';
        $dish->dishcategory_id = 10;
        $dish->image = 'https://media-assets.lacucinaitaliana.it/photos/61fd301f28bbd1b96fb68407/1:1/w_2560%2Cc_limit/Carciofi-alla-brace.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Verdure di stagione saltate in padella';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 6);
        $dish->description = '';
        $dish->dishcategory_id = 10;
        $dish->image = 'https://www.tavolartegusto.it/wp/wp-content/uploads/2019/05/Verdure-in-agrodolce-Ricetta-Verdure-in-agrodolce.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Tiramisù';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 7);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->image = 'https://img.comeunochef.com/2020-04/tiramisu-1.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Millefoglie';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 7);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->image = 'https://www.tavolartegusto.it/wp/wp-content/uploads/2018/06/Millefoglie-Ricetta-Millefoglie-alla-crema-1-1.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Semifreddo al torroncino';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 4, 7);
        $dish->description = '';
        $dish->dishcategory_id = 12;
        $dish->image = 'https://statics.cucchiaio.it/content/cucchiaio/it/ricette/2018/01/semifreddo-al-torroncino/jcr:content/header-par/image-single.img10.jpg/1517999544849.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Acqua naturale';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.comunianvini.it/shop/1960-medium_default/acqua-san-benedetto-1-2-lt-nat-pet-x-24.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Acqua frizzante';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://elim.shop/media/com_eshop/products/000015108.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Coca-Cola';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.topbevande.it/images/thumbs/0085545_coca-cola-original-33cl-confezione-da-24-barattoli-lattina_780.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Fanta';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.numeriprimishop.it/113648-large_default/fanta-lattina-cl33.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Ichnusa';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 5);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.basko.it/photo/2022/05/11/1/main/photo/pim-410128-1-main-20220510-193052.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Traminer Elena Walch';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.elenawalch.com/wp-content/uploads/2014/02/SELEZIONI-gewurztraminer.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Falesco Tellus Chardonnay';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.etilika.it/14050-large_default/chardonnay-lazio-igp-tellus-2021-falesco-cotarella.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Jerman Sauvignon';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.wineshop.it/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/a/sauvignon-jermann_4.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 9;
        $dish->name = 'Trebbiano Abruzzo DOC Cocciopesto';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.bollicinepescara.it/wp-content/uploads/2021/02/76-300x400.jpg';
        $dish->save();

        // Gelosia Gelateria

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Vaschetta panna';
        $dish->ingredients = 'Panna';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 5);
        $dish->dishcategory_id = 13;
        $dish->image = 'https://static.cosaporto.it/media/2021/06/244442_CremeriaMarconi_Food_Vaschetta400gpannamontata_edited.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Vaschetta gelato 500g';
        $dish->ingredients = '4 gusti a scelta';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 12, 15);
        $dish->dishcategory_id = 13;
        $dish->image = 'https://barpompi.it/wp-content/uploads/2020/04/gelato-vaschetta-500-grammi.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Vaschetta gelato 750g';
        $dish->ingredients = '6 gusti a scelta';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 18, 21);
        $dish->dishcategory_id = 13;
        $dish->image = 'https://barpompi.it/wp-content/uploads/2020/04/gelato-vaschetta-500-grammi.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Vaschetta gelato 1kg';
        $dish->ingredients = '8 gusti a scelta';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 25, 30);
        $dish->dishcategory_id = 13;
        $dish->image = 'https://barpompi.it/wp-content/uploads/2020/04/gelato-vaschetta-500-grammi.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Brioche Siciliane Semplici';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->dishcategory_id = 12;
        $dish->image = 'https://www.fattoincasadabenedetta.it/wp-content/uploads/2020/05/brioche-col-tuppo.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Brioche Venezianine Semplici';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->dishcategory_id = 12;
        $dish->image = 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2021/10/veneziane/jcr:content/procedure-par/recipe_procedures_1261598850/image2.img3.jpg/1635575365220.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Tiramisù al pistacchio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 4, 6);
        $dish->dishcategory_id = 12;
        $dish->image = 'https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/06/copertina-sito-tiramisu-al-pistacchio.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Mignon con cioccolato bianco';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->dishcategory_id = 12;
        $dish->image = 'https://www.beatitudiniculinarie.it/home/wp-content/uploads/2016/12/mignon1.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Acqua Lilia naturale';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 1, 2);
        $dish->description = '50cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.bereacasa.it/wp-content/uploads/2017/12/87307691_acqua-lilia.gif';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Succo di frutta';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.my-personaltrainer.it/2020/10/26/spremute-di-frutta-succhi-di-frutta-o-frutta-intera-_900x760.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 4;
        $dish->name = 'Bibita in lattina';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->description = '25cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://officinadellapiadina.it/wp-content/uploads/2020/08/Officina-della-piadina-bibite_Bibite-in-lattina.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Alici Fritte';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 4;
        $dish->image = 'https://www.puglia.com/wp-content/uploads/2017/04/alici-fritte-impanate-ricetta.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Calamaretti Fritti';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 4;
        $dish->image = 'https://blog.giallozafferano.it/zialora/wp-content/uploads/2019/05/DSCN12789-rrm03.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Polpo e Patate';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 4;
        $dish->image = 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2009/12/ricetta-insalata-di-polpo-con-patate/_jcr_content/header-par/image_single.img.jpg/1593161805863.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Risotto alla crema di scampi';
        $dish->ingredients = 'riso, scampi, panna, pomodoro, olio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->image = 'https://blog.giallozafferano.it/allacciateilgrembiule/wp-content/uploads/2017/09/risotto-crema-scampi.jpg';
        $dish->save();


        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Spaghettoni cozze e pecorino';
        $dish->ingredients = 'spaghettoni, cozze, pecorino, olio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->image = 'https://www.misya.info/wp-content/uploads/2018/08/pasta-cozze-e-pecorino.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Cacio e pepe e gamberi rossi';
        $dish->ingredients = 'pecorino romano, pepe, tartare gamberi rossi';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->image = 'https://www.pastaleonessa.it/public/ricette_foto/4078_Cacio%20e%20pepe.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Filetto di tonno alla piastra';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = 'https://primochef.it/wp-content/uploads/2016/09/SH_tonno_alla_griglia.jpg';
        $dish->dishcategory_id = 9;
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Filetto di spada alla piastra';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://www.misya.info/wp-content/uploads/2017/03/pesce-spada-alla-piastra.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Sgombro alla siciliana';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://www.cucina-naturale.it/wp-content/uploads/2016/11/20072Ffilettosgombro-2.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Filetto di tonno alla piastra';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://blog.giallozafferano.it/piattiprontiinunattimo/wp-content/uploads/2017/07/tonno-alla-piastra-fb.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Grigliata mista';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://www.salepepe.it/files/2015/03/grigliata-mista.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Semifreddo al cocco';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 7);
        $dish->dishcategory_id = 12;
        $dish->image = 'https://blog.giallozafferano.it/pietrozanella/wp-content/uploads/2019/07/DSC08007.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Cheesecacke ai frutti di bosco';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 7);
        $dish->dishcategory_id = 12;
        $dish->image = 'https://www.giallozafferano.it/images/167-16736/Cheesecake-ai-frutti-di-bosco_650x433_wm.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Acqua naturale';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.gruppolazialebevande.it/wp-content/uploads/2016/05/0552_sanbennat.png';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Acqua frizzante';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://cdn.shopify.com/s/files/1/0049/0831/8754/products/lattina-acqua-san-benedetto-frizzante.jpg?v=1600163478';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Coca-Cola';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.topbevande.it/images/thumbs/0085540_coca-cola-original-2-lt-confezione-da-6-bottiglie-_780.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Fanta';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://cdn.shopify.com/s/files/1/0076/3029/1041/products/3-fanta.jpg?v=1627927091';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Ichnusa';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 5);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.coop.ch/img/produkte/737_737/RGB/6862156_002.jpg?_=1638200871631';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Traminer Elena Walch';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.enotecabelledonne.eu/wp-content/uploads/2020/05/34A68052-1BF5-4508-B611-596E88E5A85B-scaled.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Falesco Tellus Chardonnay';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://media-verticommnetwork1.netdna-ssl.com/wines/falesco-famiglia-cotarella-tellus-chardonnay-bianco-lazio-1752198_e.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Jerman Sauvignon';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.bevandeadomicilio.com/3157-thickbox_default/jermann-sauvignon-venezia-giulia-igt.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 5;
        $dish->name = 'Trebbiano Abruzzo DOC Cocciopesto';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.viniwines.com/623-large_default/cocciopesto-trebbiano-dabruzzo-doc-nicodemi.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Alici Fritte';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 4;
        $dish->image = 'https://www.lacucinaimperfetta.com/wp-content/uploads/2013/03/Alici-fritte.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Calamaretti Fritti';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 4;
        $dish->image = 'https://media-assets.lacucinaitaliana.it/photos/620fbf4788f5a214a3ad3e0a/5:7/w_710,h_994,c_limit/fritto-di-calamaretti-spillo-e-maionese-leggera-allarancia.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Polpo e Patate';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 2, 3);
        $dish->dishcategory_id = 4;
        $dish->image = 'https://blog.cookaround.com/letortedimarghe/wp-content/uploads/2014/01/Insalata-di-polpo-con-piselli-e-patate.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Risotto alla crema di scampi';
        $dish->ingredients = 'riso, scampi, panna, pomodoro, olio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->image = 'https://www.ricetteperbimby.it/foto-ricette/risotto-alla-crema-di-scampi-bimby.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Spaghettoni cozze e pecorino';
        $dish->ingredients = 'spaghettoni, cozze, pecorino, olio';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->image = 'https://blog.giallozafferano.it/inventaricette/wp-content/uploads/2020/11/pasta-cozze-pecorino-vid-720x455.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Cacio e pepe e gamberi rossi';
        $dish->ingredients = 'pecorino romano, pepe, tartare gamberi rossi';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 3, 25);
        $dish->description = '';
        $dish->dishcategory_id = 8;
        $dish->image = 'https://www.pastaleonessa.it/public/ricette_foto/4078_Cacio%20e%20pepe.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Filetto di tonno alla piastra';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://blog.giallozafferano.it/piattiprontiinunattimo/wp-content/uploads/2017/07/tonno-alla-piastra-fb.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Filetto di spada alla piastra';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://www.vistanet.it/cagliari/wp-content/uploads/sites/2/2018/05/pesce-spada-alla-piastra.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Sgombro alla siciliana';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://www.cucina-naturale.it/wp-content/uploads/2016/12/oggi_cucino-cover_sgombro.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Filetto di tonno alla piastra';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://ricetta.it/Uploads/Imgs/tonno-alla-griglia.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Grigliata mista';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 9;
        $dish->image = 'https://blog.giallozafferano.it/asilannablu/wp-content/uploads/2020/07/Grigliata-mista-con-carne.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Semifreddo al cocco';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 7);
        $dish->dishcategory_id = 12;
        $dish->image = 'https://blog.giallozafferano.it/mammaluisa/wp-content/uploads/2019/09/semifreddo-al-cocco-b.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Cheesecacke ai frutti di bosco';
        $dish->available = 1;
        $dish->price = $faker->randomFloat(2, 5, 7);
        $dish->dishcategory_id = 12;
        $dish->image = 'https://wips.plug.it/cips/buonissimo.org/cms/2019/01/Cheesecake-ai-frutti-di-bosco-4.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Acqua naturale';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.comunianvini.it/shop/1960-medium_default/acqua-san-benedetto-1-2-lt-nat-pet-x-24.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Acqua frizzante';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 1, 3);
        $dish->description = '50 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://d2f5fuie6vdmie.cloudfront.net/asset/ita/2020/33/ee08fbbdd7fb3b2fd614d3e989220e0483af6179.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Coca-Cola';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://www.topbevande.it/images/thumbs/0085545_coca-cola-original-33cl-confezione-da-24-barattoli-lattina_780.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Fanta';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 2, 4);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://d2f5fuie6vdmie.cloudfront.net/asset/ita/2020/16/99457112d6022e4ba7fedf7dc1c67324933504f6.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Ichnusa';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 3, 5);
        $dish->description = '33 cl';
        $dish->dishcategory_id = 15;
        $dish->image = 'https://pinsotto.club/wp-content/uploads/2020/05/38.png';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Traminer Elena Walch';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.sugros.com/wp-content/uploads/2020/01/39587.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Falesco Tellus Chardonnay';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://resources.vino.com/data/offertaFileFile/offertaFileFile-25226.jpg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Jerman Sauvignon';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://shared.winelivery.com/images/products/5ff855c56b7e8000124d5e12.jpeg';
        $dish->save();

        $dish = new Dish();
        $dish->user_id = 6;
        $dish->name = 'Trebbiano Abruzzo DOC Cocciopesto';
        $dish->available = '1';
        $dish->price = $faker->randomFloat(2, 5, 15);
        $dish->description = '';
        $dish->dishcategory_id = 16;
        $dish->image = 'https://www.bollicinepescara.it/wp-content/uploads/2021/02/76-300x400.jpg';
        $dish->save();
    }
}
