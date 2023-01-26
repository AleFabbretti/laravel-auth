@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-4">
            <h1>{{ $project->title }}</h1>
        </div>
        <div class="my-4">
            <p>{{ $project->description }}</p>
        </div>
    </div>
@endsection
