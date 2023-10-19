<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class World extends Model
{
    use HasFactory;
    protected $table = 'worlds';
    protected $fillable = ['header', 'author', 'image', 'description'];
}
