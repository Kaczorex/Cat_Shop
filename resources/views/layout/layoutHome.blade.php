@extends('layout.master')

@section('contentMaster')


@include('layout.jumbotron')


<div class="container">
	<div class="album text-muted">
		<div class="container">
			<div class="row">


				@yield('content')


			</div>
		</div>
	</div>
</div>



@endsection