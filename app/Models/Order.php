<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'ebook_id',
        // 'customer_id',
        'name',
        'date_ordered'
    ];

    public function ebook() {
        return $this->belongsTo(Ebook::class);
    }

    // public function customer() {
    //     return $this->belongsTo(Customer::class);
    // }

    public static function list() {
        $order = Order::orderByRaw('id')->get();
        $list = [];
        foreach($order as $order) {
            $list[$order -> id] = $order->id;
        }

        return $list;
    }
}
