<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $fillable = [
        'ebook_id',
        'name',
        'borrowed_at',
        'returned_at'
    ];

    public function ebook() {
        return $this->belongsTo(Ebook::class);
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public static function list() {
        $borrowing = Borrowing::orderByRaw('id')->get();
        $list = [];
        foreach($borrowing as $borrowing) {
            $list[$borrowing -> id] = $borrowing->id;
        }

        return $list;
    }
}
