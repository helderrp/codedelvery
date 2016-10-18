<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class State extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['state', 'uf'];

    public $timestamps = false;

    public function cities()
    {
        return $this->hasMany(City::class);
    }

}
