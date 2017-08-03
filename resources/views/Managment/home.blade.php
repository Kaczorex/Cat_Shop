@extends('layout.master')

@section('contentMaster')

<div class="container">
	<div class="detailsMaster">
		<div class="container detailsMaster">
			<div class="album text-muted">
				<div class="container">
					<div class="row container">


						{{Form::open(['route'=>'managment'])}}

						<h2>Wybierz co ma być wyświetlane na pierwszej stronie</h2>

						<div class="row">
							<div class="col-sm-3">
								{{Form::label('first_row','Pierwszy rząd:',['class'=>'form_control'])}}
							</div>
							<div class="col-sm-9">
								{{Form::select('first_row',\App\Managment::category(),null,['class'=>'form-control'])}}
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								{{Form::label('second_row','Drugi rząd:',['class'=>'form_control'])}}
							</div>
							<div class="col-sm-9">
								{{Form::select('second_row',\App\Managment::category(),null,['class'=>'form-control'])}}
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								{{Form::label('third_row','Trzeci rząd:')}}
							</div>
							<div class="col-sm-9">
								{{Form::select('third_row',\App\Managment::category(),null,['class'=>'form-control'])}}
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								{{Form::label('fourth_row','Czwarty rząd:')}}
							</div>
							<div class="col-sm-9">
								{{Form::select('fourth_row',\App\Managment::category(),null,['class'=>'form-control'])}}
							</div>
						</div>





							{{Form::submit('Akceptuj zmiany')}}


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	@endsection