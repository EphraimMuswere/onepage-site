@extends('adminlte::page')

@section('title', 'Features')

@section('content_header')
    <h1>Features</h1>
@stop

@section('content')
    <a href="{{ route('features.create') }}" class="btn btn-primary mb-3">Add Feature</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Icon</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($features as $feature)
            <tr>
                <td>{{ $feature->title }}</td>
                <td>{{ $feature->description }}</td>
                <td><i class="{{ $feature->icon }}"></i></td>
                <td>
                    <a href="{{ route('features.edit', $feature->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('features.destroy', $feature->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
