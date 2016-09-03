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

    protected $fillable = ['id', 'start_time', 'end_time', 'appointment_mode', 'notes', 'patient_id', 'user_id', 'clinic_id', 'service_id'];

    protected $hidden = ['id'];

    public function patients()
    {
        return $this->belongsTo('Patients');
    }
}