<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Accesory
 *
 * @property $id
 * @property $brand
 * @property $description
 * @property $status
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @property Product[] $products
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Accesory extends Model
{
    
    static $rules = [
		'brand' => 'required',
		'description' => 'required',
		'status' => 'required',
		'price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['brand','description','status','price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'id_accesory', 'id');
    }
    

}
