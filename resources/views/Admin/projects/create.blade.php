@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-4">
            <h1>Crea progetto</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="my-4">
            <form action="{{ route('admin.project.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo progetto</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="inserisci il titolo">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="10"
                        placeholder="inserisci la descrizione"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </div>
@endsection
