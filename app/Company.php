<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $guarded = array();

    public function licences() {

        return $this->belongsToMany('App\Licence')->withPivot('company_id');
    }

}
