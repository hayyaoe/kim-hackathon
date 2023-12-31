<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_Stock extends Model
{
    use HasFactory;

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function umkm(){
        return $this->belongsTo(Umkm::class);
    }
}
