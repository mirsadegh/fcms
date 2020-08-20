<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $guarded = ['id'];
    public function photes()
    {
        return $this->hasMany(HeaderMobilePhoto::class);
    }
}
