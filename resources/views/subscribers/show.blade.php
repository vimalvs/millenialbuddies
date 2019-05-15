@extends('layout')

@section('title', 'Subscribers')

@section('content') 
    <h1>
       Welcome to subscribers edit page
    </h1>
    <ul>


    <h2>Show</h2>

    <h2>{{$subscriber->user_email}}</h2>

    <a href="/subscribers">Back to home</a>
    <a href="/subscribers/{{$subscriber->id}}/edit">edit</a>

    <form  method="post" action="/subscribers/{{$subscriber->id}}">
        @csrf
        @method('DELETE')

    	<fieldset>
			<button class="btn btn-danger">delete</button>
    	</fieldset>


    </form>
@endsection