@extends('layouts/layout')

@section('contents')

     <div class="content">
        <div class="box">
            <h1>{{ $projects->title }}</h1>

            @if ($projects->tasks->count())  
                 @foreach($projects->tasks as $task)
                    <form method="POST" action="/task/{{ $task->id }}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked':'' }}>
                            <label class="form-check-label {{ $task->completed ? 'is_complete':'' }}" for="defaultCheck1">{{ $task->description }}</label>
                        </div>
                    </form>
                @endforeach
            @endif
        </div>

        <div class="box">
            <form method="POST" action="/project/{{$projects->id}}/task">
                {{ csrf_field() }}
                <div class="form-group">
                <input type="text" class="form-control {{ $errors->has('description')? 'border border-danger' : '' }}" name="description" placeholder="Add New Task" value="{{ old('description')}}">
            </div>
            <button type="submit" class="btn btn-primary">Add New Task</button>
            </form>
        </div>

        @include('errors');

     </div>

@endsection