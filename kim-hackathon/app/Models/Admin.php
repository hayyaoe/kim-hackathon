<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public function accounting (){
        return $this->hasMany(Accounting::class);
    }

    public function item_stock(){
        return $this->hasMany(Item_Stock::class);
    }

    public function umkm(){
        return $this->hasMany(Umkm::class);
    }
}
