@extends('main')

@section('content')

	
		<div class="row">
			<div class="col-md-7 mx-auto">
				{!! Form::open(['route' => 'posts.store']) !!}
    			{{ Form::text('body',null,array('class'=>'form-control')) }}
    			{{ Form::submit('Create', array('class' => 'btn btn-primary ml-auto mt-3','style' => 'margin-top: 20px;'))}}
				{!! Form::close() !!}
			</div>
		</div>

	@endsection

