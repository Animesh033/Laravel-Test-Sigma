<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = ['name', 'category', 'quantity'];
    public $timestamps = false;
}
