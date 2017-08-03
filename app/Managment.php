<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Managment extends Model
{
    



   static public function category(){
    	return ['Long hair','Short hair'];
    }
}
