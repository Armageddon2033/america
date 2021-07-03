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
                <a href="{{ route('states.create') }}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('states.delete', ['state' => $state->id]) }}" class="nav-link active">Delete state</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('states.destroy', ['state' => $state->id]) }}">
        @method('DELETE')
        @csrf

        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" class="form-control" id="id" placeholder="{{ $state->id }}" readonly>
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $state->name }}" readonly>
            <label for="birthday">Admitted to the Union</label>
            <input type="date" name="birthday" class="form-control" id="birthday" value="{{ $state->birthday }}" readonly>
            <label for="capital">Capital</label>
            <input type="text" name="capital" class="form-control" id="capital" value="{{ $state->capital }}" readonly>
            <label for="largest">Largest</label>
            <input type="text" name="largest" class="form-control" id="largest" value="{{ $state->largest }}" readonly>
            <label for="flag">Flag</label>
            <input type="url" name="flag" class="form-control" id="flag" placeholder="{{ $state->flag }}" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
@endsection
