

{{Form::open(['route'=>'insertManagment'])}}



<div class="form-group row">
	<div class="col-sm-2">
		{{Form::label('name','Imię:',['class'=>'col-form-label'])}}
	</div>
	<div class="col-sm-6">
		{{Form::text('name',null,['class'=>'form-control','required'])}}
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">
		{{Form::label('type','Rasa:',['class'=>'col-form-label'])}}
	</div>
	<div class="col-sm-6">
		{{Form::select('type',[null => 'Wybierz rasę'] + \App\Managments::category() ,null,['class'=>'form-control','required'])}}
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">
		{{Form::label('age','Wiek:',['class'=>'col-form-label'])}}
	</div>
	<div class="col-sm-6">
		{{Form::number('age',null,['class'=>'form-control','required'])}}
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">
		{{Form::label('color','Kolor:',['class'=>'col-form-label'])}}
	</div>
	<div class="col-sm-6">
		{{Form::select('color',[null => 'Wybierz kolor'] +\App\Managments::color(),null,['class'=>'form-control'])}}
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">
		{{Form::label('description','Opis:',['class'=>'col-form-label'])}}
	</div>
	<div class="col-sm-6">
		{{Form::textarea('description',null,['class'=>'form-control'])}}
	</div>
</div>

<div class="form-group row">
	<div class="col-sm-2">
		{{Form::label('first','dodaj zdjęcie główne:',['class'=>'col-form-label'])}}
	</div>
	<div class="col-sm-6">
		{{Form::file('',['class'=>'form-control'])}}
	</div>
</div>


<div class="form-group row">
	<div class="ml-auto">
		{{Form::submit('Dodaj kota do bazy',['class'=>'btn btn-success'])}}
	</div>
</div>

{{Form::close()}}
