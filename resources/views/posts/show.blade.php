@extends('main')

@section('content')

	 {!! Form::model($post, ['route' => ['posts.update', $post->id],'method' => 'PUT']) !!}
	 <div class="row">
	 <div class="col-sm-6">
	 	{{ Form::textarea('body',null,['class' => 'form-control']) }}
	 </div>
	</div>

	 <div class="row">
	 	<div class="col-sm-6">
	 		{{ Form::submit('Update', ['class' => "btn btn-primary","style" => "margin-top:20px;"]) }}
	 	</div>
	 </div>

	 {!! Form::close() !!}

	 <div class="row">
	 	<div class="col-sm-6">
	 		{!! Form::open(['route' => ['posts.destroy',$post->id],'method' => 'DELETE']) !!}

	 		{!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}

	 		{!! Form::close() !!}
	 	</div>

@endsection