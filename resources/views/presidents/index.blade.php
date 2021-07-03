@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Presidents</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="{{ route('presidents.index') }}" class="nav-link active">Index</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('presidents.create') }}" class="nav-link">Create</a>
            </li>
        </ul>
    </nav>

    <table class="table table-striped" id="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Birthday</th>
            <th scope="col">Death</th>
            <th scope="col">President nr</th>
            <th scope="col">Details</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($presidents as $president)
            <tr>
                <td scope="row">{{ $president->id }}</td>
                <td>{{ $president->first_name }} {{ $president->last_name }}</td>
                <td>{{ $president->birthday }}</td>
                <td>{{ $president->death }}</td>
                <td>{{ $president->rank }}</td>
                <td><a href="{{ route('presidents.show', ['president' => $president->id]) }}">Details</a></td>
                <td><a href="{{ route('presidents.edit', ['president' => $president->id]) }}">Edit</a></td>
                <td><a href="{{ route('presidents.delete', ['president' => $president->id]) }}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $presidents->links() }}
@endsection
