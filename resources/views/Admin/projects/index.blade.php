@extends('layouts.admin')

@section('content')
    <h1>Lista Progetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Cliente</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($project as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->company }}</td>
                    <td>{{ $project->action }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
