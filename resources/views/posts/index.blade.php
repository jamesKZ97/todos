@extends('main')

@section('content')


    <a href="{{ route('posts.create') }}" class="btn btn-lg btn-primary" style="margin-bottom: 20px; margin-left: auto; margin-right: auto;">Create New Todos</a>

     <div class="todos-wrapper">
         <ul class="list-group todos-list">
           @foreach ($posts as $post)
             <li class="list-group-item todos-list-item"><a href="{{ route('posts.show',$post->id) }}" style="color: #000000;"> {{ $post->body }} </a> </li>
           @endforeach
          </ul>
    </div>



@endsection