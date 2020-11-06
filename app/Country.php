<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table = 'country';

    public function continent()
    {
        return $this->belongsTo('\App\Continent','con_id_fk');
    }
}
