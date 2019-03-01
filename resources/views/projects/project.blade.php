@extends('layouts/layout')

@section('contents')

     <div class="content">
        
            <h1>Project Page</h1>
            <ul>
	            @foreach($projects as $project)
	            	<li><a href="/project/{{ $project->id }}">{{ $project->title }}</a>
	            		<ul>
	            			<li>{{ $project->description}}  -- {{$project->created_at}} <a href="/project/{{ $project->id }}/edit">Edit</a></li>
	            		</ul>
	            	</li>
	            @endforeach
	        </ul>

     </div>

@endsection