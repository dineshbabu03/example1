@extends('layouts/layout')

@section('contents')

     <div class="content">
        
        <h1>Create New Project</h1>
        <form method="POST" action="/project">
        	{{ csrf_field() }}
		  	<div class="form-group">
		    	<label>Project Title</label>
		    	<input type="text" class="form-control {{ $errors->has('title')? 'border border-danger' : '' }}" name="title" placeholder="Project Title" value="{{ old('title')}}">
		  	</div>
		  	<div class="form-group">
    			<label for="exampleFormControlTextarea1">Project Description</label>
    			<textarea class="form-control {{ $errors->has('description')? 'border border-danger' : '' }}" name="description" rows="3">{{ old('description') }}</textarea>
  			</div>
		  	<button type="submit" class="btn btn-primary">Create Project</button>
		</form>

     </div>

     @include('errors');

@endsection