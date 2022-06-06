<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;
    protected $table = "skills";
    protected $primaryKey = "skill_id";
    protected $fillable = [
        'en_name',
        'ar_name',
        'percent',
    ];
}
