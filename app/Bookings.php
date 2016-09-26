<?php
/**
 * Created by PhpStorm.
 * User: Naamini
 * Date: 8/31/2016
 * Time: 8:07 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model{

    protected $table = 'bookings';

    protected $primaryKey = 'id';

    protected $fillable = ['start_time', 'end_time', 'patient_id', 'user_id', 'clinic_id', 'service_id', 'appointment_mode', 'notes'];


    public function patients()
    {
        return $this->belongsTo('Patients');
    }
}