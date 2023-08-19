@extends('master')

@section('content')
    <div class="card mt-2 card-body bg-light">
        <form action="{{ route('save-todo') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Input Title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" rows="2" name="description" placeholder="Input Description"></textarea>
            </div>

            <div class="mb-1">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ url('/todo') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>

@endsection

