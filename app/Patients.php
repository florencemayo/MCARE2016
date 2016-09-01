<?php
/**
 * Created by PhpStorm.
 * User: Naamini
 * Date: 8/31/2016
 * Time: 8:03 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $table = 'patients';

    protected $primaryKey = 'id';

    protected $fillable = ['id'];

    protected $hidden = ['id'];

    public function newborns(){
        return $this->HasMany('Newborns');
    }

    public function bills(){
        return $this->belongsTo('Bills');
    }

    public function clinics(){
        return $this->HasMany('Clinics');
    }

    public function rooms(){
        return $this->belongsTo('Rooms');
    }

    public function bookings(){
        return $this->belongsTo('Bookings');
    }

    public function services(){
        return $this->HasMany('services');
    }

    public function department(){
        return $this->HasMany('Department');
    }
}