@extends('app.layout')

@section('content')
    <a href="{{ route('projects.create') }}" class="">Create New Project</a>

    @if ($projects->count())
        <table class="">
            <thead>
            <tr>
                <th>Title</th>
                <th>Customer</th>
                <th>Budget</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->customer }}</td>
                    <td>{{ $project->budget }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td>
                        <a href="{{ route('projects.show', $project->id) }}" class="">View</a>
                        <a href="{{ route('projects.edit', $project->id) }}" class="">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No projects available.</p>
    @endif
@endsection
