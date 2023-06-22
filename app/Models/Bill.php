<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bill
 *
 * @property $id
 * @property $total
 * @property $date
 * @property $name
 * @property $last_name
 * @property $id_sales
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer[] $customers
 * @property Sale $sale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bill extends Model
{
    
    static $rules = [
		'total' => 'required',
		'date' => 'required',
		'name' => 'required',
		'last_name' => 'required',
		'id_sales' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['total','date','name','last_name','id_sales'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers()
    {
        return $this->hasMany('App\Models\Customer', 'id_bill', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne('App\Models\Sale', 'id', 'id_sales');
    }
    

}
