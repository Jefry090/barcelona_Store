<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 *
 * @property $id
 * @property $quantity
 * @property $price
 * @property $date
 * @property $id_product
 * @property $id_supplier
 * @property $id_record
 * @property $created_at
 * @property $updated_at
 *
 * @property Bill[] $bills
 * @property Customer[] $customers
 * @property Product $product
 * @property Record $record
 * @property Supplier $supplier
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{
    
    static $rules = [
		'quantity' => 'required',
		'price' => 'required',
		'date' => 'required',
		'id_product' => 'required',
		'id_supplier' => 'required',
		'id_record' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['quantity','price','date','id_product','id_supplier','id_record'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bills()
    {
        return $this->hasMany('App\Models\Bill', 'id_sales', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers()
    {
        return $this->hasMany('App\Models\Customer', 'id_sales', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'id_product');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function record()
    {
        return $this->hasOne('App\Models\Record', 'id', 'id_record');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function supplier()
    {
        return $this->hasOne('App\Models\Supplier', 'id', 'id_supplier');
    }
    

}
