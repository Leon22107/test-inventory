<?php

namespace App\Observers;

use App\Models\Item;
use App\Models\Item_Stock;


class stockIOobserver
{
    /**
     * Handle the Item_Stock "created" event.
     */
    public function created(Item_Stock $item_Stock){

        $total_stock = Item::where('id', $item_Stock->item_id)->first();

        if ($total_stock) {
            $total_stock->increment('stock', $item_Stock->qty);
        }
        else {
            // template gpt
            Item::create([
                'id' => $item_Stock->item_id,
                'stock' => $item_Stock->qty ,
            ]);
        }
    }

    /**
     * Handle the Item_Stock "updated" event.
     */
    public function updated(Item_Stock $item_Stock): void
    {
        //
    }

    /**
     * Handle the Item_Stock "deleted" event.
     */
    public function deleted(Item_Stock $item_Stock): void
    {
        //
    }

    /**
     * Handle the Item_Stock "restored" event.
     */
    public function restored(Item_Stock $item_Stock): void
    {
        //
    }

    /**
     * Handle the Item_Stock "force deleted" event.
     */
    public function forceDeleted(Item_Stock $item_Stock): void
    {
        //
    }
}
