@extends('layout.master')

@section('contentMaster')

<div class="container">
	<div class="detailsMaster">
		<div class="container detailsMaster">
			<div class="album text-muted">
				<div class="container">
					<div class="row container">
					@include('errors.FormValidate')
						<div class="container">
							@include('managment.displayCats')
						</div>
						<br>
							<hr>
						<br>		
						<div class="container">
							@include('managment.addCats')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection