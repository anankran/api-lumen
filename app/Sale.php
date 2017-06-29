<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    protected $fillable = ['salesman', 'value', 'commission'];

    public static function getSale($id)
    {
      $records = self::select('sales.id','salesman.name','salesman.email','sales.value','sales.commission','sales.created_at')->leftJoin('salesman', function($join){ $join->on('sales.salesman','=','salesman.id'); })->where('salesman',$id)->get();
      return $records;
    }
}
