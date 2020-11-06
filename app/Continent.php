<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //
    protected $table = 'continent';
    protected $fillable = ['continent'];

    public function country()
    {
       return $this->hasMany('\App\Country','con_id_fk');
    }
}
