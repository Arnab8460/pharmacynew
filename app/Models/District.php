<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table        =   'district_master';
    protected $primaryKey   =   'd_id';
    public $timestamps      =   false;

    protected $guarded = [];
    public function state()
    {
        return $this->hasOne('App\Models\State', "state_id_pk", "state_id_fk")->withDefault(function () {
            return new State();
        });
    }
}
