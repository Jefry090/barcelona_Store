<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Phone
 *
 * @property $id
 * @property $brand
 * @property $model
 * @property $status
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @property Product[] $products
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Phone extends Model
{
    
    static $rules = [
		'brand' => 'required',
		'model' => 'required',
		'status' => 'required',
		'price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['brand','model','status','price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'id_phone', 'id');
    }
    

}
