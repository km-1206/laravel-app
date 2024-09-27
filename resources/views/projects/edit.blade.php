@extends('app.layout')

@section('content')
    <h2>Edit Project</h2>

    @if ($errors->any())
        <div class="">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST" class="">
        @csrf
        @method('PUT')
        <div class="">
            <label for="title">Title</label>
            <input type="text" name="title" class="" value="{{ $project->title }}" required>
        </div>

        <div class="">
            <label for="description">Description</label>
            <textarea name="description" class="" required>{{ $project->description }}</textarea>
        </div>

        <div class="">
            <label for="customer">Customer</label>
            <input type="text" name="customer" class="" value="{{ $project->customer }}" required>
        </div>

        <div class="">
            <label for="budget">Budget</label>
            <input type="number" name="budget" class="" value="{{ $project->budget }}" required>
        </div>

        <div class="">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" class="" value="{{ $project->start_date }}" required>
        </div>

        <div class="">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" class="" value="{{ $project->end_date }}" required>
        </div>

        <button type="submit" class="">Update Project</button>
        <a href="{{ route('projects.index') }}" class="">Cancel</a>
    </form>
@endsection
