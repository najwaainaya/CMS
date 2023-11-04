<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqPos extends Model
{
    use HasFactory;

    protected $table = 'faq_pos';

    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'question',
        'answer',

    ];
}
