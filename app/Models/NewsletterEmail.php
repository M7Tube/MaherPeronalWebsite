<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterEmail extends Model
{
    use HasFactory;
    protected $table = "newsletter_emails";
    protected $primaryKey = "newsletter_email_id";
    protected $fillable = [
        'email',
    ];
}