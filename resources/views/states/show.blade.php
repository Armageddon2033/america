@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">States</h1>

    @if(session('message'))
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
                <a href="{{ route('states.show', ['state' => $state->id]) }}" class="nav-link active">State details</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('states.edit', ['state' => $state->id]) }}" class="nav-link">Edit state details</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            States
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $state->name }}</h2>
            <img src="{{ $state->flag }}" alt="Flag of the state {{ $state->name }}" style="width: 25%; height: 25%;"><br/><br/>
            <p class="card-text">Name: {{ $state->name }}</p>
            <p class="card-text">Admitted to the Union: {{ $state->birthday }}</p>
            <p class="card-text">Capital: {{ $state->capital }}</p>
            <p class="card-text">Largest city: {{ $state->largest }}</p>
        </div>
    </div>
@endsection
