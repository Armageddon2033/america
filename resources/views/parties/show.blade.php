@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Parties</h1>

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
                <a href="{{ route('parties.index') }}" class="nav-link">Index</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('parties.create') }}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('parties.show', ['party' => $party->id]) }}" class="nav-link active">Party details</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('parties.edit', ['party' => $party->id]) }}" class="nav-link">Edit party details</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Parties
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $party->name }}</h2>
            <img src="{{ $party->logo }}" alt="Logo of the {{ $party->logo }}" style="width: 25%; height: 25%;">
            <p class="card-text">Name: {{ $party->name }}</p>
            <p class="card-text">Founder(s): {{ $party->founder }}</p>
        </div>
    </div>
@endsection
