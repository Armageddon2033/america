<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['id', 'name', 'birthday', 'flag', 'capital', 'largest'];

    public function presidents()
    {
        return $this->hasMany(President::class);
    }
}
