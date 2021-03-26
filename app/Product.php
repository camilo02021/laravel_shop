<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name','slug','tienda_id','category_id','details','price','description','featured','quantity','peso','medida','image','images'];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.name' => 10,
            'products.details' => 5,
            'products.description' => 2,
        ],
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
    
}
