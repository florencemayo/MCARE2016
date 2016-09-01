<?php
/**
 * Created by PhpStorm.
 * User: Naamini
 * Date: 8/31/2016
 * Time: 8:04 AM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    protected $table = 'departments';

    protected $primaryKey = 'id';

    protected $fillable = ['id', 'name'];

    protected $hidden = ['id'];

    public function patients()
    {
        return $this->HasMany('Patients');
    }

    public function services()
    {
        return $this->HasMany('services');
    }
}