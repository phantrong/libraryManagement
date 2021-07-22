<?php

namespace App\Models;

use App\Models\Content;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use SoftDeletes;

    const TYPE_ONE = 'Sách Chính trị – pháp luật';
    const TYPE_TWO = 'Sách Khoa học công nghệ – Kinh tế';
    const TYPE_THREE = 'Sách Văn học nghệ thuật';
    const TYPE_FOUR = 'Sách Văn hóa xã hội – Lịch sử';
    const TYPE_FIVE = 'Sách Giáo trình';
    const TYPE_SIX = 'Sách Truyện, tiểu thuyết';
    const TYPE_SEVEN = 'Sách Tâm lý, tâm linh, tôn giáo';
    const TYPE_EIGHT = 'Sách thiếu nhi';
    const TYPE_DEFAULT = 'Khác';

    protected $fillable = [
        'category',
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

    public function getName($book_id)
    {
        return DB::table('books')->select('name')->where('id', $book_id)->first()->name;
    }
}
