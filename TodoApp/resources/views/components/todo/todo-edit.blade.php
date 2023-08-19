@extends('master')

@section('content')
    <div class="card mt-2 card-body bg-light">
        <form action="{{ url('/update-todo') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $todo->title }}">
                <input type="hidden" class="form-control" name="id" value="{{ $todo->id }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" rows="2" name="description">{{ $todo->description }}</textarea>
            </div>

            <div class="mb-1">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ url('/todo') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>

@endsection

