<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = ['id', 'name', 'founder', 'logo'];

    public function presidents()
    {
        return $this->hasMany(President::class);
    }
}
