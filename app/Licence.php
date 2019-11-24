<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{

    protected $guarded = array();

    public function companies()
    {
        return $this->belongsToMany('App\Company')->withPivot('licence_id');
    }

}
