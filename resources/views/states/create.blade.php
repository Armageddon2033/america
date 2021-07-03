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
                <a href="{{ route('states.create') }}" class="nav-link active">Create</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('states.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" class="form-control" id="birthday">
            <label for="flag">Flag</label>
            <input type="file" name="flag" class="form-control" id="flag">
            <input type="url" name="flag" class="form-control" id="flag">
            <label for="capital">Capital</label>
            <input type="text" name="capital" class="form-control" id="capital" placeholder="Capital">
            <label for="largest">Largest city</label>
            <input type="text" name="largest" class="form-control" id="largest" placeholder="Largest city">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
