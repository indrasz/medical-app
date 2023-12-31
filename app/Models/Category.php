<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'categories';

    protected $fillable = [
        'name',
        'slug'
    ];

    public function hospitals()
    {
        return $this->hasMany(Hospital::class);
    }
}
