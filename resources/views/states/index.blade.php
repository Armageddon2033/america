@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">States</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="{{ route('states.index') }}" class="nav-link active">Index</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('states.create') }}" class="nav-link">Create</a>
            </li>
        </ul>
    </nav>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col" rowspan="2">#</th>
            <th scope="col" rowspan="2">Name</th>
            <th scope="col" rowspan="2">Admitted to the Union</th>
            <th scope="col" colspan="2" class="text-center">Cities</th>
            <th scope="col" rowspan="2">Details</th>
            <th scope="col" rowspan="2">Edit</th>
            <th scope="col" rowspan="2">Delete</th>
        </tr>
        <tr>
            <th scope="col">Capital</th>
            <th scope="col">Largest</th>
        </tr>
        </thead>
        <tbody>
        @foreach($states as $state)
            <tr>
                <td scope="row">{{ $state->id }}</td>
                <td>{{ $state->name }}</td>
                <td>{{ $state->birthday }}</td>
                <td>{{ $state->capital }}</td>
                <td>{{ $state->largest }}</td>
                <td><a href="{{ route('states.show', ['state' => $state->id]) }}">Details</a></td>
                <td><a href="{{ route('states.edit', ['state' => $state->id]) }}">Edit</a></td>
                <td><a href="{{ route('states.delete', ['state' => $state->id]) }}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $states->links() }}
@endsection
