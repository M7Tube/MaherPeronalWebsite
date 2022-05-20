<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $table = "services";
    protected $primaryKey = "service_id";
    protected $fillable = [
        'en_name',
        'ar_name',
        'en_desc',
        'ar_desc',
        'icon',
    ];
}
