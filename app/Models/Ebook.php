<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author',
        'price'
    ];

    public function order() {
        return $this->hasMany(Orders::class);
    }

    public function borrowing() {
        return $this->hasMany(Borrowings::class);
    }

    public static function list() {
        $ebook = Ebook::orderByRaw('title')->get();
        $list = [];
        foreach($ebook as $ebook) {
            $list[$ebook -> id] = $ebook->title;
        }

        return $list;
    }
}
