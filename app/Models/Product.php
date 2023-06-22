<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $price
 * @property $id_phone
 * @property $id_accesory
 * @property $created_at
 * @property $updated_at
 *
 * @property Accesory $accesory
 * @property Phone $phone
 * @property Sale[] $sales
 * @property Stock[] $stocks
 * @property Supplier[] $suppliers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'name' => 'required',
		'price' => 'required',
		'id_phone' => 'required',
		'id_accesory' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','price','id_phone','id_accesory'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function accesory()
    {
        return $this->hasOne('App\Models\Accesory', 'id', 'id_accesory');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function phone()
    {
        return $this->hasOne('App\Models\Phone', 'id', 'id_phone');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany('App\Models\Sale', 'id_product', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stocks()
    {
        return $this->hasMany('App\Models\Stock', 'id_product', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suppliers()
    {
        return $this->hasMany('App\Models\Supplier', 'id_product', 'id');
    }
    

}
