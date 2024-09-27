@extends('app.layout')

@section('content')
    <h2>{{ $project->title }}</h2>

    <p><strong>Description:</strong> {{ $project->description }}</p>
    <p><strong>Customer:</strong> {{ $project->customer }}</p>
    <p><strong>Budget:</strong> ${{ $project->budget }}</p>
    <p><strong>Start Date:</strong> {{ $project->start_date }}</p>
    <p><strong>End Date:</strong> {{ $project->end_date }}</p>

    <a href="{{ route('projects.index') }}" class="">Back to Projects</a>
@endsection
