@if(Session::has('message'))
	<div class="alert alert-success">
		<i class="fa fa-check"></i> {!! Session::get('message') !!}
	</div>
@endif