<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Article extends Model
{
    //$primaryKey属性来覆盖主键
    protected $table = 'article';

    public $timestamps = true;

    public function getDateFormat()
    {
        return time();
    }
    protected function asDateTime($val)
    {
        return $val;
    }

    public function user()
    {
//        return $this->hasOne('App\User','id','created_by');
          return $this->belongsTo('App\User','created_by');
//        return $this->hasOne('User');
    }

    
}
