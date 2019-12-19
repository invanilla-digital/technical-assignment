<?php

use App\Domain\Orders\Order;
use App\Domain\Orders\OrderItem;
use App\Domain\Products\Product;
use Illuminate\Database\Seeder;

class FullOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new Order();

        $order->save();

        $pencilProduct = new Product([
            'title' => 'Pencil',
            'price' => 0.99,
        ]);

        $pencilProduct->save();

        $notebookProduct = new Product([
            'title' => 'Note book',
            'price' => 2.45,
        ]);

        $notebookProduct->save();

        /**
         * @var OrderItem $firstOrderItem
         */
        $firstOrderItem = $order->items()->create([
            'quantity' => 2,
            'product_id' => $notebookProduct->id,
        ]);

        /**
         * @var OrderItem $secondOrderItem
         */
        $secondOrderItem = $order->items()->create([
            'quantity' => 6,
            'product_id' => $pencilProduct->id,
        ]);

        $firstOrderItem->discounts()->create([
            'percent' => 10,
        ]);

        $secondOrderItem->discounts()->create([
            'percent' => 50,
        ]);

        $order->discounts()->create([
            'percent' => 10,
        ]);
    }
}
