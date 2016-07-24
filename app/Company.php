<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Component\HttpFoundation\File\File;

class Company extends Model
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
        'name', 'logo','tax', 'user_id',
    ];

    public function setLogoAttribute($value)
    {
        if (!empty($value)) {
            $name = "logo_{$this->attributes['name']}.{$value->getClientOriginalExtension()}";

            $this->attributes['logo'] = $name;
            $value->move('images/', $name);
        }
    }
}
