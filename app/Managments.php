<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use App\Cats;


class Managments extends Model
{



	static public function insertCat($request){

		if($request->type==0)  
			$request->type=false;
		if($request->color==0)
			$request->color=false;

		Cats::insert([
			'name' => $request->name,
			'type' => $request->type,
			'age' => $request->age,
			'color' => $request->color,
			'description' => $request->description,
			'firstPhoto' => 'tekst',
   		    'created_at' =>  \Carbon\Carbon::now(), # \Datetime()
            'updated_at' => \Carbon\Carbon::now()  # \Datetime()
            ]);

	}




	static public function value($val){
		return DB::table('managments')->select('Value')->where('what','index cats row '.$val)->first()->Value;
	}

	public function whatUpdate($what){

		if(!empty($what->first_row) );
		$this->updateIndex($what->first_row,'1');
		if(!empty($what->second_row));
		$this->updateIndex($what->second_row,'2');
		if(!empty($what->third_row));
		$this->updateIndex($what->third_row,'3');
		if(!empty($what->fourth_row));
		$this->updateIndex($what->fourth_row,'4');
	}

	public function updateIndex($val,$id){

		if($val!=='0')
			DB::table('managments')->where('what','index cats row '.$id)->update([
				'Value' => $val,
				'updated_at' => \Carbon\Carbon::now()
				]);
	}

	static public function category(){
		// dd(DB::table('cats')->select('type')->groupBy('type')->get());
		// $table = DB::table('managments')->select('Value')->where('what','like','index cats row %')->get();
		$table = DB::table('cats')->select('type')->groupBy('type')->get();
		$count= $table->count();
		// dd($table);
		$x=0;
	
		while ($x < $count) {
			$array[$table[$x]->type]=$table[$x]->type;
			$x++;
		}
		unset($array[0]);
		// dd($array);
		return $array;
	}
	static public function color(){

		$table = DB::table('cats')->select('color')->groupBy('color')->get();
		$count= $table->count();
		// dd($table);
		$x=0;
		
		while ($x < $count) {
			$array[$table[$x]->color]=$table[$x]->color;
			$x++;
		}
		unset($array[0]);
		// dd($array);
		return $array;

	}



}
