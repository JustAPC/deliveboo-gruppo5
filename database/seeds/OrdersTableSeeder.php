<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Generator as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $names = [
            'Antonio', 'Alessandro', 'Mario', 'Luigi', 'Antonella', 'Laura', 'Martina',
            'Luca', 'Silvia', 'Michele', 'Andrea', 'Stefano', 'Patrizia', 'Jacopo', 'Giulia',
            'Sebastiano', 'Davide', 'Marco', 'Maria', 'Luca'
        ];

        $last_names = [
            'Milella', 'Rossi', 'Monti', 'Motta', 'Satta', 'Grassi', 'Costa', 'Fornarini',
            'Russo', 'Lenza', 'Porta', 'Tasso', 'Posta', 'Martinoli', 'Mirati',
            'Fischi', 'Spoleto', 'Masini', 'Massa', 'Mainetti'
        ];

        $addresses = [
            'Via dei Quintili, 111, 00175 Roma RM', 'Via di Bravetta, 322, 00164 Roma RM',
            'Via Monte Pertica, 11, 00195 Roma RM', 'Via Umberto Novaro, 32, 00195 Roma RM',
            'Via Candia, 38-72, 00192 Roma RM', 'Via Riccardo Grazioli Lante, 52, 00195 Roma RM',
            'Via Carlo Montanari, 6, 00195 Roma RM', 'Via Svizzera, 2, 00196 Roma RM',
            'Via Michele Mercati, 19, 00197 Roma RM', 'Via Gaeta, 50, 00185 Roma RM',
            'Via Ceneda, 21, 00183 Roma RM', 'Via degli Arvali, 89, 00175 Roma RM',
            'Via dei Quintili, 104, 00175 Roma RM', 'Viale Tor Marancia, 00147 Roma RM',
            'Via Carroceto, 60-74, 00178 Roma RM', 'Via Vittorio Valletta, 57, 00156 Roma RM',
            'Via Abetone, 4E, 00141 Roma RM', 'Via Soratte, 6, 00141 Roma RM',
            'Via Val Maggia, 158, 00141 Roma RM', 'Via Grazia Deledda, 114, 00137 Roma RM'
        ];

        $phone_numbers = [
            '3483447552', '3407441225', '3474881256', '3477441252', '3381559427', '3387441259', '3405687443',
            '3407441259', '3487441351', '3405128756', '3405128756', '3406587419', '3406587419', '3468124599',
            '3467415288', '3467484892', '3395874123', '3397451236', '3408552147', '3408561287'
        ];

        for ($i = 1; $i < 11; $i++) {
            for ($x = 0; $x < count($names); $x++) {
                $order_creation = $faker->dateTimeBetween('-1 year', '');

                $order = new Order();

                $order->user_id = $i;
                $order->customer_name = $names[$x];
                $order->customer_lastname = $last_names[$x];
                $order->customer_address = $addresses[$x];
                $order->completed = 1;
                $order->payment_received = 1;
                $order->total_price = $faker->randomFloat(2, 10, 50);
                $order->customer_phone = $phone_numbers[$x];
                $order->created_at = $order_creation;
                $order->created_at = $order_creation;
                $order->save();
            }
        }
    }
}
