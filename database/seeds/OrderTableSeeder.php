<?php

use Illuminate\Database\Seeder;
use App\Models\Merchant;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merchant_ids = Merchant::all()->pluck('id');

        foreach ($merchant_ids as $merchant_id) {
            $orders = factory(\App\Models\Order::class)->times(100)->make()
                ->each(function ($order, $index) use ($merchant_id) {
                    $order->merchant_id = $merchant_id;
                });

            \App\Models\Order::insert($orders->toArray());
        }

    }
}
