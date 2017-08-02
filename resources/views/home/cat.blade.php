@extends('layout.detailsMaster')

@section('content')

<?php $faker = Faker\Factory::create(); ?>

<div class="container">
	
	<div class="row">
		<div class="col-md-4"><center><h3>{{$cat->name}}</h3></center>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-7"></div>
	</div>
	<div class="row">
		<div class="col-md-4 title-section">
			<img src="{{$faker->imageUrl(380,300,'cats')}}">
		</div>
		<div class="col-md-1">
			
		</div>
		<div class="col-md-7">
			<div class="row">
				<div class="col-sm-1">Wiek:</div> 
				<div class="col-sm-11">{{$cat->age}} </div>
			</div>
			<div class="row">
				<div class="col-sm-1">Rasa:</div> 
				<div class="col-sm-11">{{$cat->type}} </div>
			</div>
			<div class="row">
				<div class="col-sm-1">Kolor:</div> 
				<div class="col-sm-11">{{$cat->color}} </div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-12"><h4>{{$cat->description}}</h4></div>
			</div>
			
		</div>

	</div>
	<div class="row">
		<div class="col-md-12 photo-rest-section"><hr></div>
	</div>
	<div class="row photo-rest-section">
		<div class="col-md-3"><img src="{{$faker->imageUrl(340,280,'cats')}}"></div>
		<div class="col-md-1"></div>
		<div class="col-md-3"><img src="{{$faker->imageUrl(340,280,'cats')}}"></div>
		<div class="col-md-1"></div>
		<div class="col-md-3"><img src="{{$faker->imageUrl(340,280,'cats')}}"></div>
		<div class="col-md-1 last-cat"></div>
	</div>



</div>





@endsection