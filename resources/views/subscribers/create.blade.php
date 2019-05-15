@extends('layout')

@section('title', 'Subscribers')

@section('content') 
    <h1>
       Welcome to subscribers page
    </h1>

    <h2>Get In Touch</h2>

    <form class="form " action="/subscribers" method="post">
    	{{csrf_field()}}
    	<fieldset>
    		<legend>Subscribe to get notification </legend>
    		<div>Enter Email</div>
    		<input type="text" name="user_email">
    		<div class="form-actions">
    			<button class="btn btn-success">Submit</button>
    		</div>
    	</fieldset>
    </form>
    bulmafield  input label
@endsection