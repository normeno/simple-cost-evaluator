<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperatingExpense extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id', 'rent', 'light', 'phone', 'mobile', 'internet', 'water'
    ];
}
