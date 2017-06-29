<?php

namespace App;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Illuminate\Database\Eloquent\Model;

class Salesman extends Model
{
    protected $table = 'salesman';
    protected $fillable = ['name', 'email', 'comission'];

    protected static function getSalesman()
    {
        $records = self::select('id','name','email','commission')->get();
        return $records;
    }
}
