<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['name1', 'email1', 'phone1','address1','city1', 'district1',
        'name2', 'email2', 'phone2','address2','city2', 'district2',
        'total_price','note'
    ];

    public function order_details(){
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
}
