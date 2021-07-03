@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Parties</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="{{ route('parties.index') }}" class="nav-link active">Index</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('parties.create') }}" class="nav-link">Create</a>
            </li>
        </ul>
    </nav>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Founder</th>
            <th scope="col">Details</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($parties as $party)
            <tr>
                <td scope="row">{{ $party->id }}</td>
                <td>{{ $party->name }}</td>
                <td>{{ $party->founder }}</td>
                <td><a href="{{ route('parties.show', ['party' => $party->id]) }}">Details</a></td>
                <td><a href="{{ route('parties.edit', ['party' => $party->id]) }}">Edit</a></td>
                <td><a href="{{ route('parties.delete', ['party' => $party->id]) }}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $parties->links() }}
@endsection
