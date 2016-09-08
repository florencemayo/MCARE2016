<?php
/**
 * Created by PhpStorm.
 * User: Naamini
 * Date: 8/31/2016
 * Time: 8:03 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model{
    protected $table = 'address';

    protected $primaryKey = 'id';

    protected $fillable = ['address_code', 'street_name', 'district_name', 'region_name', 'country_name'];

    protected $hidden = ['id'];

    public function users(){
        return $this->HasMany('Users');
    }
}