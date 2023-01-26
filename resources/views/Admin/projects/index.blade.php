@extends('layouts.admin')

@section('content')
    <h1>Lista Progetti</h1>
    <div class="my-4">
        <a href="{{ route('admin.project.create') }}" class="btn btn-primary">Crea progetto</a>
    </div>
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
                    <td><a href="{{ route('admin.project.show', $project->slug) }}" class="btn btn-success"><i
                                class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
