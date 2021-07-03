@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Presidents</h1>

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
                <a href="{{ route('presidents.index') }}" class="nav-link">Index</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('presidents.create') }}" class="nav-link active">Create</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('presidents.store') }}">
        @csrf

        <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First name">
            <label for="first_name">Last name</label>
            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last name">
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" class="form-control" id="birthday">
            <label for="death">Death</label>
            <input type="date" name="death" class="form-control" id="death">
            <label for="rank">President nr</label>
            <input type="number" name="rank" class="form-control" id="rank"><br>
            <label for="party">Party or parties</label><br>
            <select multiple name="parties[]" id="party">
                @foreach($parties as $party)
                    <option value="{{ $party->id }}">{{ $party->name }}</option>
                @endforeach
            </select><br><br>
            <label for="states">States won</label><br>
            <select multiple name="states[]" id="states">
                @foreach($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select><br><br>
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image">
            <input type="url" name="image" class="form-control" id="image">
            <label for="audio">Audio</label>
            <input type="file" name="audio" class="form-control" id="audio">
            <input type="url" name="audio" class="form-control" id="audio">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
