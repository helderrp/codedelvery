<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
class City extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['city', 'state_id'];

    public $timestamps = false;

    public function state()
    {
        return $this->belongsTo(State::class);
    }

}
