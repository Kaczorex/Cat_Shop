

{{-- {{ dd(\App\Managments::category())}} --}}



{{Form::open(['route'=>'updateManagment'],['class'=>'form-vertical'])}}

<h2>Wybierz co ma być wyświetlane na pierwszej stronie</h2>

<div class="form-group row">
	<div class="col-sm-2">
		{{Form::label('first_row','Pierwszy rząd:',['class'=>'col-form-label'])}}
	</div>
	<div class="col-sm-6">
		{{-- {{Form::select('first_row',\App\Managments::category(),null,['class'=>'form-control'])}} --}}
		Randomowo ze wszystkich kategori
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">
		{{Form::label('second_row','Drugi rząd:',['class'=>'col-form-label'])}}
	</div>
	<div class="col-sm-6">
		{{Form::select('second_row',[null => 'Wybierz rasę'] + \App\Managments::category(),null,['class'=>'form-control'])}}
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">
		{{Form::label('third_row','Trzeci rząd:',['class'=>'col-form-label'])}}
	</div>
	<div class="col-sm-6">
		{{Form::select('third_row',[null => 'Wybierz rasę'] + \App\Managments::category(),null,['class'=>'form-control'])}}
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">
		{{Form::label('fourth_row','Czwarty rząd:',['class'=>'col-form-label'])}}
	</div>
	<div class="col-sm-6">
		{{Form::select('fourth_row',[null => 'Wybierz rasę'] + \App\Managments::category(),null,['class'=>'form-control'])}}
	</div>
</div>
<div class="form-group row">
	<div class="ml-auto">
		{{Form::submit('Akceptuj zmiany',['class'=>'btn btn-success'])}}
	</div>
</div>
{{Form::close()}}