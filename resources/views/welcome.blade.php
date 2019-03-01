@extends('layouts/layout')

@section('contents')

     <div class="content">
        
            <h1>Home Page</h1>
            <ul>
                @foreach($tasks as $task)
                    <li>{{ $task }}</li>
                @endforeach
            </ul>

     </div>

@endsection