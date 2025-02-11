@extends('adminlte::page')

@section('title', 'Edit Service')

@section('content_header')
    <h1>Edit Service</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('services.update', $service) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="service_name" class="form-label">Service Name</label>
                    <input type="text" name="service_name" class="form-control" value="{{ $service->service_name }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ $service->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update Service</button>
                <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
