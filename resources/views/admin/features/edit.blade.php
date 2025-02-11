@extends('adminlte::page')

@section('title', 'Edit Feature')

@section('content_header')
    <h1>Edit Feature</h1>
@stop

@section('content')
    <form action="{{ route('features.update', $feature->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $feature->title }}" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ $feature->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Icon (Bootstrap Icons Class)</label>
            <input type="text" name="icon" class="form-control" value="{{ $feature->icon }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@stop
