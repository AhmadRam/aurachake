<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'title',
        'lineOne',
        'lineTwo',
        'city',
        'township',
        'postalcode',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'address_id');
    }
}
