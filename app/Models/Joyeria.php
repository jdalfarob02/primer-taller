<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Joyeria extends Model
{
    protected $table = 'joyerias';
        protected $fillable = [
                'articulo_id' , 'precio', 'descripcion'
    ];

    protected $hidden =[
            'created_at', 'updated_at'
    ];

    protected $casts =[
        'descripcion' =>'array'
    ];

    public function articulo()
    {
        return $this->belonsTo('App\Models\Articulo');
    }

   
    
    
   


}
