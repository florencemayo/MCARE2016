<?php
/**
 * Created by PhpStorm.
 * User: Naamini
 * Date: 8/31/2016
 * Time: 8:03 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model{
    protected $table = 'doctors';

    protected $primaryKey = 'id';

    protected $fillable = ['expertise', 'user_id'];

    protected $hidden = ['id'];

    public function patients(){
        return $this->HasMany('Patients');
    }
}