@extends('adminlte::page')

@section('title', 'Add Feature')

@section('content_header')
    <h1>Add Feature</h1>
@stop

@section('content')
    <form action="{{ route('features.store') }}" method="POST">
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
            <label>Icon (Bootstrap Icons Class)</label>
            <input type="text" name="icon" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@stop
