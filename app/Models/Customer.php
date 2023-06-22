<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $email
 * @property $phone_number
 * @property $address
 * @property $id_sales
 * @property $id_bill
 * @property $created_at
 * @property $updated_at
 *
 * @property Bill $bill
 * @property Sale $sale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'email' => 'required',
		'phone_number' => 'required',
		'address' => 'required',
		'id_sales' => 'required',
		'id_bill' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','email','phone_number','address','id_sales','id_bill'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bill()
    {
        return $this->hasOne('App\Models\Bill', 'id', 'id_bill');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne('App\Models\Sale', 'id', 'id_sales');
    }
    

}
