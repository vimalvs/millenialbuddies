@extends('layout')

@section('title', 'Subscribers')

@section('content') 
    <h1>
       Welcome to subscribers page
    </h1>
    <ul>
    @foreach($subscribers as $project)
    	<li><a href="/subscribers/{{$project->id}}">{{$project->user_email}}</a></li>
    @endforeach
    </ul>

   {{--  <h2>Get In Touch</h2>
    <form class="form " action="/subscribers" method="post">
    	<fieldset>
    		<legend>Subscribe to get notification </legend>
    		<div>Enter Email</div>
    		<input type="text" name="user_email">
    		<div class="form-actions">
    			<button class="btn btn-success">Submit</button>
    		</div>
    	</fieldset>
    </form> --}}
@endsection