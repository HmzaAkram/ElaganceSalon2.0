<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Feedback extends Model
{
    use HasFactory;
    protected $table = 'tbl_feedback';

    protected $fillable = [
        // 'apponitId',
        // 'userId',
        'name',
        'email',
        'feedback',
        'review',  // Add star_rating to fillable array
    ];
}
