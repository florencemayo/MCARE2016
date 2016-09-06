<?php
/**
 * Created by PhpStorm.
 * User: BANGALORE
 * Date: 8/31/2016
 * Time: 8:06 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model{
    protected $table = 'bills';

    protected $primaryKey = 'id';

    protected $fillable = ['bill_title','patient_id','payee','amount_numeric','amount_text','bill_type','government_tax'];

    protected $hidden = ['id'];

    public function patients()
    {
      return $this->belongsTo('Patients');
    }
}

