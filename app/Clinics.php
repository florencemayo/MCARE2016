<?php
/**
 * Created by PhpStorm.
 * User: Naamini
 * Date: 8/31/2016
 * Time: 8:05 AM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinics extends Model{
    protected $table = 'clinics';

    protected $primaryKey = 'id';

    protected $fillable = ['clinic_name', 'floor_number','department_id'];

    protected $hidden = ['id'];

    public function patients()
    {
        return $this->HasMany('Patients');
    }
}