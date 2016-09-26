<?php
/**
 * Created by PhpStorm.
 * User: Naamini
 * Date: 8/31/2016
 * Time: 8:05 AM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model{
    protected $table = 'ward';

    protected $primaryKey = 'id';

    protected $fillable = ['ward_name', 'number_of_beds','clinic_id', 'department_id'];

    protected $hidden = ['id'];

    public function patients()
    {
        return $this->HasMany('Patients');
    }

    public function beds()
    {
        return $this->HasMany('Beds');
    }

}