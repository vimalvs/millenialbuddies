@extends('layout')

@section('title', 'Cotact Us') 

@section('content') 
    <h1>
        contact page
    </h1>

        <ul>
        @foreach($tasks as $task)
        	<li>{{$task}}</li>
        @endforeach
		</ul>
@endsection