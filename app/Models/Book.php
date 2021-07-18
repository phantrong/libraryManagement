<?php

namespace App;

use App\Models\Content;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    const TYPE_ONE = 1;
    const TYPE_TWO = 2;
    const TYPE_THREE = 1;
    const TYPE_FOUR = 2;
    const TYPE_FIVE = 1;
    const TYPE_SIX = 2;
    const TYPE_SEVEN = 1;
    const TYPE_EIGHT = 2;
    const TYPE_NINE = 1;
    const TYPE_DEFAULT = 2;

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
