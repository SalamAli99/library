<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=[
        'title' ,
        'publication' ,
        'type' ,
        'status',
        'author' 
    ];
    use HasFactory;
}
