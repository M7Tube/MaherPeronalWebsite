<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = "items";
    protected $primaryKey = "item_id";
    protected $fillable = [
        'ar_name',
        'en_name',
        'ar_desc',
        'en_desc',
        'picture',
        'user_id',
    ];
}
