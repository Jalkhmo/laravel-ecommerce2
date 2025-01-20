<?php

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        Order::create([
            'user_id' => 1, // ID d'un utilisateur existant
            'total_price' => 49.99,
            'status' => 'pending',
        ]);

        Order::create([
            'user_id' => 2, // ID d'un autre utilisateur existant
            'total_price' => 79.99,
            'status' => 'completed',
        ]);
    }
}
