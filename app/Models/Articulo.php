<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
        protected $fillable = [
                'articulo'
    ];

    protected $hidden =[
            'created_at', 'updated_at'
    ];

    public function joyerias()
    {
        return $this->hasMany('App\Models\Joyeria');
    }

    public function setArticuloAttribute($value)
    {
        $this->attributes['articulo']= strtoupper($value);
    }

}
