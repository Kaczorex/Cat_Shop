<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{


	public function Cats(){
		return $this->belongsTo(Cats::class);
	}




}
