@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Parties</h1>

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
                <a href="{{ route('parties.index') }}" class="nav-link">Index</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('parties.create') }}" class="nav-link active">Create</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('parties.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            <label for="founder">Founder</label>
            <input type="text" name="founder" class="form-control" id="founder">
            <label for="logo">Party logo</label>
            <input type="file" name="logo" class="form-control" id="logo">
            <input type="url" name="logo" class="form-control" id="logo">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
