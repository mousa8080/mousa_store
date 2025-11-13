<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
        protected $connection='mysql';
        protected $table='stores';
        protected $primaryKey='id';
        public $incrementing =true; //is just public
        public $timestamps=true; //is just public
        
}
