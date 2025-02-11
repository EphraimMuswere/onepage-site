@extends('adminlte::page')

@section('title', 'Add About Section')

@section('content_header')
    <h1>Add About Section</h1>
@endsection

@section('content')
    <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Features (Comma Separated)</label>
            <input type="text" name="features[]" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>CEO Name</label>
            <input type="text" name="ceo_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>CEO Image</label>
            <input type="file" name="ceo_image" class="form-control">
        </div>
        <div class="mb-3">
            <label>Phone Number</label>
            <input type="text" name="phone_number" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Years of Experience</label>
            <input type="number" name="years_of_experience" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Main Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
