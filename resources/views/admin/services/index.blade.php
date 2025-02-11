@extends('adminlte::page')

@section('title', 'Services')

@section('content_header')
    <h1>Manage Services</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Add New Service</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Service Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $service->service_name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <a href="{{ route('services.edit', $service) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('services.destroy', $service) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
