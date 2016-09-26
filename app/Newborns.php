<?php
/**
 * Created by PhpStorm.
 * User: Naamini
 * Date: 8/31/2016
 * Time: 8:04 AM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Newborns extends Model{
    protected $table = 'newborns';

    protected $primaryKey = 'id';

    protected $fillable = ['identification_code', 'date_birth'];

    protected $hidden = ['id'];

    protected $guarded = ['doctor_id','patient_id'];

    public function patients()
    {
        return $this->belongsTo('Patients');
    }
}