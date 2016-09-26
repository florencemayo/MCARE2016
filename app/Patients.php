<?php
/**
 * Created by PhpStorm.
 * User: Naamini
 * Date: 8/31/2016
 * Time: 8:03 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model{
    protected $table = 'patients';

    protected $primaryKey = 'id';

    protected $fillable = ['first_name','middle_name','last_name','gender','birthdate','mobile_number','nextOfKin','street_name','district_name','region_name','country_name','email_address','password'];

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

    public function doctors(){
        return $this->HasMany('Doctors');
    }

    public function beds(){
        return $this->belongsTo('Beds');
    }
}
