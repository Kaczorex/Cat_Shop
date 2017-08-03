@extends('layout.master')

@section('contentMaster')

<div class="container">
	<div class="detailsMaster">
		<div class="container detailsMaster">
			<div class="album text-muted">
				<div class="container">
					<div class="row">

						@yield('content')

					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection