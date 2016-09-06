<?php
/**
 * Created by PhpStorm.
 * User: Naamini
 * Date: 8/31/2016
 * Time: 8:06 AM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{

    protected $table = 'rooms';

    protected $primaryKey = 'id';

    protected $fillable = ['room_name', 'number', 'floor_number'];

    protected $hidden = ['id'];


    public function patients()
    {
        return $this->belongsTo('Patients');
    }
}