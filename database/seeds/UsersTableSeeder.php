<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id = 1;
        $user->name = 'Ristorante Giapponese Cinese Le De Sen';
        $user->email = 'ledesen@gmail.com';
        $user->password = bcrypt('password');
        $user->phone_number = '0688939115';
        $user->address = 'Via Vincenzo Tieri 249';
        $user->city = 'Roma';
        $user->state = 'Lazio';
        $user->zip = '00123';
        $user->vat = '59068840913';
        $user->restaurant_name = 'Ristorante Giapponese Cinese Le De Sen';
        $user->restaurant_img = 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_500,d_it:cuisines:giapponese-2.jpg/v1/it/restaurants/254552.jpg';
        $user->save();

        $user = new User();
        $user->id = 2;
        $user->name = 'Fischio Sushi';
        $user->email = 'fischio@gmail.com';
        $user->password = bcrypt('password');
        $user->phone_number = '3294620122';
        $user->address = 'Via degli Olmetti 36';
        $user->city = 'Roma';
        $user->state = 'Lazio';
        $user->zip = '00060';
        $user->vat = '18172690119';
        $user->restaurant_name = 'Fischio Sushi';
        $user->restaurant_img = 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_500,d_it:cuisines:giapponese-1.jpg/v1/it/restaurants/244391.jpg';
        $user->save();

        $user = new User();
        $user->id = 3;
        $user->name = 'Ristorante La Belle Epoque';
        $user->email = 'labelleepoque@gmail.com';
        $user->password = bcrypt('password');
        $user->phone_number = '065780339';
        $user->address = 'Via Cassia 1618';
        $user->city = 'Roma';
        $user->state = 'Lazio';
        $user->zip = '00123';
        $user->vat = '69730120990';
        $user->restaurant_name = 'Ristorante La Belle Epoque';
        $user->restaurant_img = 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_500,d_it:cuisines:pesce-5.jpg/v1/it/restaurants/252265.jpg';
        $user->save();

        $user = new User();
        $user->id = 4;
        $user->name = 'Gelosia Gelateria';
        $user->email = 'gelosiagelateria@gmail.com';
        $user->password = bcrypt('password');
        $user->phone_number = '0679785651';
        $user->address = 'Via Liberio Bovio 5';
        $user->city = 'Roma';
        $user->state = 'Lazio';
        $user->zip = '00123';
        $user->vat = '32210440403';
        $user->restaurant_name = 'Gelosia Gelateria';
        $user->restaurant_img = 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_500,d_it:cuisines:gelato-1.jpg/v1/it/restaurants/246611.jpg';
        $user->save();

        $user = new User();
        $user->id = 5;
        $user->name = 'La Pescheria Patarini';
        $user->email = 'pescheriapatarini@gmail.com';
        $user->password = bcrypt('password');
        $user->phone_number = '0679765742';
        $user->address = 'Piazza Alcide De Gasperi 1';
        $user->city = 'Roma';
        $user->state = 'Lazio';
        $user->zip = '00060';
        $user->vat = '50988280264';
        $user->restaurant_name = 'La Pescheria Patarini';
        $user->restaurant_img = 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_500,d_it:cuisines:pesce-4.jpg/v1/it/restaurants/248064.jpg';
        $user->save();

        $user = new User();
        $user->id = 6;
        $user->name = 'Piscarius';
        $user->email = 'piscarius@gmail.com';
        $user->password = bcrypt('password');
        $user->phone_number = '0679775842';
        $user->address = 'Via Bolognola 66';
        $user->city = 'Roma';
        $user->state = 'Lazio';
        $user->zip = '00138';
        $user->vat = '54396200336';
        $user->restaurant_name = 'Piscarius - Il Maggiordomo del Mare';
        $user->restaurant_img = 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_500,d_it:cuisines:pesce-4.jpg/v1/it/restaurants/246534.jpg';
        $user->save();

        $user = new User();
        $user->id = 7;
        $user->name = 'Bottega 35';
        $user->email = 'bottega35@gmail.com';
        $user->password = bcrypt('password');
        $user->phone_number = '0689038431';
        $user->address = 'Via Braccianese 35';
        $user->city = 'Roma';
        $user->state = 'Lazio';
        $user->zip = '00123';
        $user->vat = '41169190109';
        $user->restaurant_name = 'Bottega 35';
        $user->restaurant_img = 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_500,d_it:cuisines:pizza-0.jpg/v1/it/restaurants/207010.jpg';
        $user->save();

        $user = new User();
        $user->id = 8;
        $user->name = 'Smile One';
        $user->email = 'smileone@gmail.com';
        $user->password = bcrypt('password');
        $user->phone_number = '0656309573';
        $user->address = 'Via Giuseppe Belardinelli 54';
        $user->city = 'Roma';
        $user->state = 'Lazio';
        $user->zip = '00123';
        $user->vat = '29359170825';
        $user->restaurant_name = 'Smile One Pizza & Food';
        $user->restaurant_img = 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_500,d_it:cuisines:pizza-8.jpg/v1/it/restaurants/219218.jpg';
        $user->save();

        $user = new User();
        $user->id = 9;
        $user->name = 'Il Casaletto';
        $user->email = 'ilcasaletto@gmail.com';
        $user->password = bcrypt('password');
        $user->phone_number = '0616489456';
        $user->address = 'Via Formellese 1';
        $user->city = 'Roma';
        $user->state = 'Lazio';
        $user->zip = '00123';
        $user->vat = '12548510820';
        $user->restaurant_name = 'Il Casaletto';
        $user->restaurant_img = 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_500,d_it:cuisines:pizza-5.jpg/v1/it/restaurants/211425.jpg';
        $user->save();

        $user = new User();
        $user->id = 10;
        $user->name = 'Pony Burger';
        $user->email = 'ponyburger@gmail.com';
        $user->password = bcrypt('password');
        $user->phone_number = '066693555';
        $user->address = 'Via Formellese 1';
        $user->city = 'Roma';
        $user->state = 'Lazio';
        $user->zip = '00123';
        $user->vat = '29054340772';
        $user->restaurant_name = 'Pony Burger';
        $user->restaurant_img = 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_500,d_it:cuisines:hamburger-5.jpg/v1/it/restaurants/253055.jpg';
        $user->save();
    }
}
