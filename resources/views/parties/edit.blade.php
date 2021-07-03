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
                <a href="{{ route('parties.index') }}" class="nav-link">Index</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('parties.create') }}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('parties.show', ['party' => $party->id]) }}" class="nav-link">Party details</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('parties.edit', ['party' => $party->id]) }}" class="nav-link active">Edit party details</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('parties.update', ['party' => $party->id]) }}">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" class="form-control" id="id" placeholder="{{ $party->id }}" readonly>
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $party->name }}">
            <label for="founder">Founder</label>
            <input type="text" name="founder" class="form-control" id="founder" value="{{ $party->founder }}">
            <label for="logo">Party logo</label>
            <input type="file" name="logo" class="form-control" id="logo">
            <input type="url" name="logo" class="form-control" id="logo" value="{{ $party->logo }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
