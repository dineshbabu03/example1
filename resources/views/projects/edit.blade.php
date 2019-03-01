@extends('layouts/layout')

@section('contents')

     <div class="content">
        
            <h1>Edit Project Page</h1>
            <form method="POST" action="/project/update/{{$project->id}}">
	        	{{-- {{ method_field('PATCH') }} --}}
	        	{{ csrf_field() }}

			  	<div class="form-group">
			    	<label>Project Title</label>
			    	<input type="text" class="form-control" name="title" placeholder="Project Title" value="{{ $project->title }}">
			  	</div>
			  	<div class="form-group">
	    			<label for="exampleFormControlTextarea1">Project Description</label>
	    			<textarea class="form-control" name="description" rows="3">{{ $project->description }}</textarea>
	  			</div>
			  	<button type="submit" class="btn btn-primary">Update Project</button>
			</form>

			<form method="POST" action="/project/delete/{{ $project->id }}">
				{{-- {{ method_field('DELETE')}} --}}
				{{ csrf_field() }}

				<button type="submit" class="btn btn-danger" style="margin-top:1em;">Delete Project</button>
			</form>

     </div>

@endsection