<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    protected $fillable = ['id', 'first_name', 'last_name', 'birthday', 'death', 'rank', 'image', 'audio'];

    public function parties()
    {
        return $this->belongsToMany(Party::class, null, 'president_id');
    }

    public function states()
    {
        return $this->belongsToMany(State::class,null,'president_id');
    }
}
