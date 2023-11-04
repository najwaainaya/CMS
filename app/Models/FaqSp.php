<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqSp extends Model
{
    use HasFactory;

    protected $table = 'faq_sp';

    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'question',
        'answer',
        
    ];
}
