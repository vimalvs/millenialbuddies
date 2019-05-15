@extends('layout')

@section('title', 'Subscribers')

@section('content') 
    <h1>
       Welcome to subscribers edit page
    </h1>
    <ul>


    <h2>Edit</h2>

    <form  method="post" action="/subscribers/{{$subscriber->id}}">
    	
        @csrf
        @method('patch')

    	<fieldset>
    		<legend>Subscribe to get notification </legend>
    		<div>Enter Email</div>
    		<input type="text" name="user_email" value="{{$subscriber->user_email}}">
    		<div class="form-actions">
    			<button class="btn btn-success">Submit</button>
    		</div>
    	</fieldset>




    </form>
@endsection