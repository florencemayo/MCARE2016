<?php
/**
 * Created by PhpStorm.
 * User: Naamini
 * Date: 8/31/2016
 * Time: 8:05 AM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Beds extends Model{
    protected $table = 'beds';

    protected $primaryKey = 'id';

    protected $fillable = ['bed_size', 'bed_type', 'bed_class','bed_charge','ward_id','clinic_id','department_id'];

    protected $hidden = ['id'];

    public function patients()
    {
        return $this->belongsTo('Patients');
    }

    public function ward()
    {
        return $this->belongsTo('Ward');
    }
}