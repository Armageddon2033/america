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
                <a href="{{ route('presidents.create') }}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('presidents.delete', ['president' => $president->id]) }}" class="nav-link active">Delete president</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('presidents.destroy', ['president' => $president->id]) }}">
        @method('DELETE')
        @csrf

        <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="{{ $president->id }}" disabled>
            <label for="first_name">First name</label>
            <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $president->first_name }}" disabled>
            <label for="first_name">Last name</label>
            <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $president->last_name }}" disabled>
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" class="form-control" id="birthday" value="{{ $president->birthday }}" disabled>
            <label for="death">Death</label>
            <input type="date" name="death" class="form-control" id="death" value="{{ $president->death }}" disabled>
            <label for="rank">President nr</label>
            <input type="number" name="rank" class="form-control" id="rank" value="{{ $president->rank }}" disabled>
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image">
            <input type="url" name="image" class="form-control" id="image" placeholder="{{ $president->image }}" disabled>
            <label for="audio">Audio</label>
            <input type="file" name="audio" class="form-control" id="audio">
            <input type="url" name="audio" class="form-control" id="audio" placeholder="{{ $president->audio }}" disabled>
        </div>
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
@endsection
