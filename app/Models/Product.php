<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements Buyable
{
    use CrudTrait;
    use HasTranslations;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'image', 'details','promotion','trademark',
        'price', 'price_real', 'category_id','code_pro','specification',
        'guarantee','status','meta_title','meta_description','meta_keywords'
    ];
    // protected $hidden = [];
    // protected $dates = [];
//    public $translatable = ['name', 'description', 'details', 'features', 'extras'];
    const STATUS_STILL = 1;
    const STATUS_OVER = 0;
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    public function getBuyableIdentifier($options = null) {
        return $this->id;
    }
    public function getBuyableDescription($options = null) {
        return $this->name;
    }
    public function getBuyablePrice($options = null) {
        return $this->price;
    }
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
