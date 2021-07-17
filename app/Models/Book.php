<?php

namespace App;

use App\Models\Content;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'auth',
        'publisher',
        'translator',
        'country',
        'quantity',
        'price',
        'year_start',
        'created_by',
        'updated_by'
    ];

    public function content()
    {
        return $this->hasOne(Content::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
