<?php
/**
 * Created by PhpStorm.
 * User: Naamini
 * Date: 8/31/2016
 * Time: 8:07 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model{

    protected $table = 'services';

    protected $primaryKey = 'id';

    protected $fillable = ['service_name', 'price', 'bill_id'];

    protected $hidden = ['id'];

    public function patient()
    {
        return $this->HasMany('Patient');
    }

    public function department()
    {
        return $this->HasMany('Department');
    }
}