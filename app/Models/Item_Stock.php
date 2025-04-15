<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_Stock extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function vendor(){
        return $this->belongsTo(Vendor::class);
    }

    public function item(){
        return $this->belongsTo(Item::class);
    }
}
