<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $timestamps = true;

    protected $table = 'appointments';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $guarded = ['id'];

}
