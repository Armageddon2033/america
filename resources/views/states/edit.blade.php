@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">States</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="{{ route('states.index') }}" class="nav-link">Index</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('states.show', ['state' => $state->id]) }}" class="nav-link">State details</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('states.edit', ['state' => $state->id]) }}" class="nav-link active">Edit state details</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('states.update', ['state' => $state->id]) }}">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" class="form-control" id="id" placeholder="{{ $state->id }}" readonly>
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $state->name }}">
            <label for="birthday">Admitted to the Union</label>
            <input type="date" name="birthday" class="form-control" id="birthday" value="{{ $state->birthday }}">
            <label for="flag">Flag</label>
            <input type="file" name="flag" class="form-control" id="flag">
            <input type="url" name="flag" class="form-control" id="flag" value="{{ $state->flag }}">
            <label for="capital">Capital</label>
            <input type="text" name="capital" class="form-control" id="capital" value="{{ $state->capital }}">
            <label for="largest">Largest</label>
            <input type="text" name="largest" class="form-control" id="largest" value="{{ $state->largest }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
