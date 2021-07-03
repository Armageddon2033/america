@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Presidents</h1>

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
                <a href="{{ route('presidents.index') }}" class="nav-link">Index</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('presidents.create') }}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('presidents.show', ['president' => $president->id]) }}" class="nav-link active">President details</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('presidents.edit', ['president' => $president->id]) }}" class="nav-link">Edit president details</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Presidents
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $president->first_name }} {{ $president->last_name }}</h2>
            <img src="{{ $president->image }}" alt="President of The United States of America" style="width: 25%; height: 25%;">
            <p class="card-text"><strong>Name: </strong> {{ $president->first_name }} {{ $president->last_name }}</p>
            <p class="card-text"><strong>Birthday: </strong>{{ $president->birthday }}</p>
            @if(isset($president->death))<p class="card-text"><strong>Death: </strong>{{ $president->death }}</p>@endif
            <p class="card-text"><strong>President nr: </strong>{{ $president->rank }}</p>
            <string class="card-text"><strong>Party or parties: </strong></string><br>
            @foreach($president->parties as $party)
                {{ $party->name }} <br>
            @endforeach <br>
            <string class="card-text"><strong>States won: </strong></string><br>
            @foreach($president->states as $state)
                {{ $state->name }} <br>
            @endforeach
            @if(isset($president->audio))
                <span class="card-text"><strong>Audio fragment: </strong></span>
                <audio controls preload="none">
                    <source src="{{ $president->audio }}" type="audio/wav">
                </audio>
            @endif
        </div>
    </div>
@endsection
